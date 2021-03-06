<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Http\RequestHandlers;

use Fisharebest\Webtrees\Factory;
use Fisharebest\Webtrees\Http\ViewResponseTrait;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Services\AdminService;
use Fisharebest\Webtrees\Services\TreeService;
use Fisharebest\Webtrees\Site;
use Fisharebest\Webtrees\Tree;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

use function app;

/**
 * Show the manager options for trees.
 */
class ManageTrees implements RequestHandlerInterface
{
    use ViewResponseTrait;

    /** @var AdminService */
    private $admin_service;

    /** @var TreeService */
    private $tree_service;

    /**
     * @param AdminService $admin_service
     * @param TreeService  $tree_service
     */
    public function __construct(AdminService $admin_service, TreeService $tree_service)
    {
        $this->admin_service = $admin_service;
        $this->tree_service  = $tree_service;
    }

    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->layout = 'layouts/administration';

        $tree = $request->getAttribute('tree');

        $multiple_tree_threshold = $this->admin_service->multipleTreeThreshold();
        $gedcom_file_count       = $this->admin_service->gedcomFiles(Factory::filesystem()->data())->count();

        $all_trees = $this->tree_service->all();

        // On sites with hundreds or thousands of trees, this page becomes very large.
        // Just show the current tree, the default tree, and un-imported trees
        if ($gedcom_file_count >= $multiple_tree_threshold) {
            $default   = Site::getPreference('DEFAULT_GEDCOM');
            $all_trees = $all_trees->filter(static function (Tree $x) use ($tree, $default): bool {
                if ($x->getPreference('imported') === '0') {
                    return true;
                }
                if ($tree instanceof Tree && $tree->id() === $x->id()) {
                    return true;
                }

                return $x->name() === $default;
            });
        }

        $title = I18N::translate('Manage family trees');

        $base_url = app(ServerRequestInterface::class)->getAttribute('base_url');

        return $this->viewResponse('admin/trees', [
            'all_trees' => $all_trees,
            'base_url'  => $base_url,
            'title'     => $title,
            'tree'      => $tree,
        ]);
    }
}
