<?php
/**
 * Xenea theme
 *
 * webtrees: Web based Family History software
 * Copyright (C) 2010 webtrees development team.
 *
 * Derived from PhpGedView
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package webtrees
 * @subpackage Themes
 * @version $Id$
 */

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$theme_name = "xenea"; // need double quotes, as file is scanned/parsed by script
$stylesheet       = WT_THEME_DIR.'style.css';
$rtl_stylesheet   = WT_THEME_DIR.'style_rtl.css';
$print_stylesheet = WT_THEME_DIR.'print.css';
$toplinks         = WT_THEME_DIR.'toplinks.php';
$headerfile       = WT_THEME_DIR.'header.php';
$footerfile       = WT_THEME_DIR.'footer.php';
$FAVICON          = WT_THEME_DIR.'images/favicon.ico';
$WT_USE_HELPIMG   = true;

//-- variables for image names
$WT_IMAGES['sex_m_9x9'] = 'images/sex_m_9x9.gif';
$WT_IMAGES['sex_f_9x9'] = 'images/sex_f_9x9.gif';
$WT_IMAGES['sex_u_9x9'] = 'images/sex_u_9x9.gif';
$WT_IMAGES['sex_m_15x15'] = 'images/sex_m_15x15.gif';
$WT_IMAGES['sex_f_15x15'] = 'images/sex_f_15x15.gif';
$WT_IMAGES['sex_u_15x15'] = 'images/sex_u_15x15.gif';
//- PGV main icons
$WT_IMAGES['admin'] = WT_THEME_DIR.'images/admin.gif';
$WT_IMAGES['ancestry'] = WT_THEME_DIR.'images/ancestry.gif';
$WT_IMAGES['calendar'] = WT_THEME_DIR.'images/calendar.gif';
$WT_IMAGES['cfamily'] = WT_THEME_DIR.'images/cfamily.gif';
$WT_IMAGES['clippings'] = WT_THEME_DIR.'images/clippings.gif';
$WT_IMAGES['descendant'] = WT_THEME_DIR.'images/descendancy.gif';
$WT_IMAGES['edit_fam'] = WT_THEME_DIR.'images/edit_fam.gif';
$WT_IMAGES['edit_indi'] = WT_THEME_DIR.'images/edit_indi.gif';
$WT_IMAGES['edit_media'] = WT_THEME_DIR.'images/edit_indi.gif';
$WT_IMAGES['edit_note'] = WT_THEME_DIR.'images/edit_indi.gif';
$WT_IMAGES['edit_repo'] = WT_THEME_DIR.'images/edit_repo.gif';
$WT_IMAGES['edit_sour'] = WT_THEME_DIR.'images/edit_sour.gif';
$WT_IMAGES['fambook'] = WT_THEME_DIR.'images/fambook.gif';
$WT_IMAGES['fanchart'] = WT_THEME_DIR.'images/fanchart.gif';
$WT_IMAGES['favorites'] = WT_THEME_DIR.'images/gedcom.gif';
$WT_IMAGES['gedcom'] = WT_THEME_DIR.'images/gedcom.gif';
$WT_IMAGES['help'] = WT_THEME_DIR.'images/help.gif';
$WT_IMAGES['home'] = WT_THEME_DIR.'images/home.gif';
$WT_IMAGES['hourglass'] = WT_THEME_DIR.'images/hourglass.gif';
$WT_IMAGES['indis'] = WT_THEME_DIR.'images/indis.gif';
$WT_IMAGES['media'] = WT_THEME_DIR.'images/media.gif';
$WT_IMAGES['menu_help'] = WT_THEME_DIR.'images/menu_help.gif';
$WT_IMAGES['menu_media'] = WT_THEME_DIR.'images/menu_media.gif';
$WT_IMAGES['menu_note'] = WT_THEME_DIR.'images/menu_note.gif';
$WT_IMAGES['menu_repository'] = WT_THEME_DIR.'images/menu_repository.gif';
$WT_IMAGES['menu_source'] = WT_THEME_DIR.'images/menu_source.gif';
$WT_IMAGES['mypage'] = WT_THEME_DIR.'images/mypage.gif';
$WT_IMAGES['notes'] = WT_THEME_DIR.'images/notes.gif';
$WT_IMAGES['patriarch'] = WT_THEME_DIR.'images/patriarch.gif';
$WT_IMAGES['pedigree'] = WT_THEME_DIR.'images/pedigree.gif';
$WT_IMAGES['place'] = WT_THEME_DIR.'images/place.gif';
$WT_IMAGES['relationship'] = WT_THEME_DIR.'images/relationship.gif';
$WT_IMAGES['reports'] = WT_THEME_DIR.'images/report.gif';
$WT_IMAGES['repository'] = WT_THEME_DIR.'images/repository.gif';
$WT_IMAGES['search'] = WT_THEME_DIR.'images/search.gif';
$WT_IMAGES['search'] = WT_THEME_DIR.'images/search.gif';
$WT_IMAGES['sfamily'] = WT_THEME_DIR.'images/sfamily.gif';
$WT_IMAGES['source'] = WT_THEME_DIR.'images/source.gif';
$WT_IMAGES['statistic'] = WT_THEME_DIR.'images/statistic.gif';
$WT_IMAGES['timeline'] = WT_THEME_DIR.'images/timeline.gif';
$WT_IMAGES['tree'] = WT_THEME_DIR.'images/tree.gif';
$WT_IMAGES['wiki'] = WT_THEME_DIR.'images/w_22.png';

//- PGV buttons for data entry pages
$WT_IMAGES['addmedia']['button'] = WT_THEME_DIR.'images/buttons/addmedia.gif';
$WT_IMAGES['addrepository']['button'] = WT_THEME_DIR.'images/buttons/addrepository.gif';
$WT_IMAGES['addsource']['button'] = WT_THEME_DIR.'images/buttons/addsource.gif';
$WT_IMAGES['addnote']['button'] = WT_THEME_DIR.'images/buttons/addnote.gif';
$WT_IMAGES['autocomplete']['button'] = WT_THEME_DIR.'images/buttons/autocomplete.gif';
$WT_IMAGES['calendar']['button'] = WT_THEME_DIR.'images/buttons/calendar.gif';
$WT_IMAGES['family']['button'] = WT_THEME_DIR.'images/buttons/family.gif';
$WT_IMAGES['indi']['button'] = WT_THEME_DIR.'images/buttons/indi.gif';
$WT_IMAGES['keyboard']['button'] = WT_THEME_DIR.'images/buttons/keyboard.gif';
$WT_IMAGES['media']['button'] = WT_THEME_DIR.'images/buttons/media.gif';
$WT_IMAGES['place']['button'] = WT_THEME_DIR.'images/buttons/place.gif';
$WT_IMAGES['repository']['button'] = WT_THEME_DIR.'images/buttons/repository.gif';
$WT_IMAGES['source']['button'] = WT_THEME_DIR.'images/buttons/source.gif';
$WT_IMAGES['note']['button'] = WT_THEME_DIR.'images/buttons/note.gif';
$WT_IMAGES['head']['button'] = WT_THEME_DIR.'images/buttons/head.gif';
$WT_IMAGES['find_facts']['button'] = WT_THEME_DIR.'images/buttons/find_facts.png';

// Media images
$WT_IMAGES['media']['audio'] = WT_THEME_DIR.'images/media/audio.png';
$WT_IMAGES['media']['doc'] = WT_THEME_DIR.'images/media/doc.gif';
$WT_IMAGES['media']['flash'] = WT_THEME_DIR.'images/media/flash.png';
$WT_IMAGES['media']['flashrem'] = WT_THEME_DIR.'images/media/flashrem.png';
$WT_IMAGES['media']['ged'] = WT_THEME_DIR.'images/media/ged.gif';
$WT_IMAGES['media']['globe'] = WT_THEME_DIR.'images/media/globe.png';
$WT_IMAGES['media']['html'] = WT_THEME_DIR.'images/media/html.gif';
$WT_IMAGES['media']['picasa'] = WT_THEME_DIR.'images/media/picasa.png';
$WT_IMAGES['media']['pdf'] = WT_THEME_DIR.'images/media/pdf.gif';
$WT_IMAGES['media']['tex'] = WT_THEME_DIR.'images/media/tex.gif';
$WT_IMAGES['media']['wmv'] = WT_THEME_DIR.'images/media/wmv.png';
$WT_IMAGES['media']['wmvrem'] = WT_THEME_DIR.'images/media/wmvrem.png';

//- other images
$WT_IMAGES['add']['other'] = WT_THEME_DIR.'images/add.gif';
$WT_IMAGES['darrow']['other'] = WT_THEME_DIR.'images/darrow.gif';
$WT_IMAGES['darrow2']['other'] = WT_THEME_DIR.'images/darrow2.gif';
$WT_IMAGES['ddarrow']['other'] = WT_THEME_DIR.'images/ddarrow.gif';
$WT_IMAGES['dline']['other'] = WT_THEME_DIR.'images/dline.gif';
$WT_IMAGES['dline2']['other'] = WT_THEME_DIR.'images/dline2.gif';
$WT_IMAGES['webtrees']['other'] = WT_THEME_DIR.'images/webtrees.png';
$WT_IMAGES['hline']['other'] = WT_THEME_DIR.'images/hline.gif';
$WT_IMAGES['larrow']['other'] = WT_THEME_DIR.'images/larrow.gif';
$WT_IMAGES['larrow2']['other'] = WT_THEME_DIR.'images/larrow2.gif';
$WT_IMAGES['ldarrow']['other'] = WT_THEME_DIR.'images/ldarrow.gif';
$WT_IMAGES['minus']['other'] = WT_THEME_DIR.'images/minus.gif';
$WT_IMAGES['note']['other'] = WT_THEME_DIR.'images/notes.gif';
$WT_IMAGES['plus']['other'] = WT_THEME_DIR.'images/plus.gif';
$WT_IMAGES['rarrow']['other'] = WT_THEME_DIR.'images/rarrow.gif';
$WT_IMAGES['rarrow2']['other'] = WT_THEME_DIR.'images/rarrow2.gif';
$WT_IMAGES['rdarrow']['other'] = WT_THEME_DIR.'images/rdarrow.gif';
$WT_IMAGES['remove']['other']	= WT_THEME_DIR.'images/remove.gif';
$WT_IMAGES['spacer']['other'] = WT_THEME_DIR.'images/spacer.gif';
$WT_IMAGES['uarrow']['other'] = WT_THEME_DIR.'images/uarrow.gif';
$WT_IMAGES['uarrow2']['other'] = WT_THEME_DIR.'images/uarrow2.gif';
$WT_IMAGES['uarrow3']['other'] = WT_THEME_DIR.'images/uarrow3.gif';
$WT_IMAGES['udarrow']['other'] = WT_THEME_DIR.'images/udarrow.gif';
$WT_IMAGES['vline']['other'] = WT_THEME_DIR.'images/vline.gif';
$WT_IMAGES['zoomin']['other'] = WT_THEME_DIR.'images/zoomin.gif';
$WT_IMAGES['zoomout']['other'] = WT_THEME_DIR.'images/zoomout.gif';
$WT_IMAGES['stop']['other'] = WT_THEME_DIR.'images/stop.gif';
$WT_IMAGES['pin-out']['other'] = WT_THEME_DIR.'images/pin-out.png';
$WT_IMAGES['pin-in']['other'] = WT_THEME_DIR.'images/pin-in.png';
$WT_IMAGES['default_image_M']['other'] = WT_THEME_DIR.'images/silhouette_male.gif';
$WT_IMAGES['default_image_F']['other'] = WT_THEME_DIR.'images/silhouette_female.gif';
$WT_IMAGES['default_image_U']['other'] = WT_THEME_DIR.'images/silhouette_unknown.gif';
$WT_IMAGES['slide_open']['other'] = WT_THEME_DIR.'images/open.png';
$WT_IMAGES['slide_close']['other'] = WT_THEME_DIR.'images/close.png';

// - lifespan chart arrows
$WT_IMAGES['lsltarrow']['other'] = WT_THEME_DIR.'images/lsltarrow.gif';
$WT_IMAGES['lsrtarrow']['other'] = WT_THEME_DIR.'images/lsrtarrow.gif';
$WT_IMAGES['lsdnarrow']['other'] = WT_THEME_DIR.'images/lsdnarrow.gif';
$WT_IMAGES['lsuparrow']['other'] = WT_THEME_DIR.'images/lsuparrow.gif';

//-- Variables for the Fan chart
$fanChart = array(
	'font'		=> WT_ROOT.'includes/fonts/DejaVuSans.ttf',
	'size'		=> '7px',
	'color'		=> '#000000',
	'bgColor'	=> '#eeeeee',
	'bgMColor'	=> '#b1cff0',
	'bgFColor'	=> '#e9daf1'
);

//-- This section defines variables for the pedigree chart
$bwidth = 220;		// -- width of boxes on pedigree chart
$bheight = 80;		// -- height of boxes on pedigree chart
$baseyoffset = 10;	// -- position the entire pedigree tree relative to the top of the page
$basexoffset = 10;	// -- position the entire pedigree tree relative to the left of the page
$bxspacing = 1;		// -- horizontal spacing between boxes on the pedigree chart
$byspacing = 5;		// -- vertical spacing between boxes on the pedigree chart
$brborder = 1;		// -- box right border thickness

// -- global variables for the descendancy chart
$Dbaseyoffset = 0;	// -- position the entire descendancy tree relative to the top of the page
$Dbasexoffset = 0;	// -- position the entire descendancy tree relative to the left of the page
$Dbxspacing = 1;	// -- horizontal spacing between boxes
$Dbyspacing = 2;	// -- vertical spacing between boxes
$Dbwidth = 270;		// -- width of DIV layer boxes
$Dbheight = 80;		// -- height of DIV layer boxes
$Dindent = 15;		// -- width to indent descendancy boxes
$Darrowwidth = 15;	// -- additional width to include for the up arrows

$CHARTS_CLOSE_HTML = true;		//-- should the charts, pedigree, descendacy, etc close the HTML on the page

// --  The largest possible area for charts is 300,000 pixels. As the maximum height or width is 1000 pixels
$WT_STATS_S_CHART_X = "440";
$WT_STATS_S_CHART_Y = "125";
$WT_STATS_L_CHART_X = "900";
// --  For map charts, the maximum size is 440 pixels wide by 220 pixels high
$WT_STATS_MAP_X = "440";
$WT_STATS_MAP_Y = "220";

$WT_STATS_CHART_COLOR1 = "ffffff";
$WT_STATS_CHART_COLOR2 = "84beff";
$WT_STATS_CHART_COLOR3 = "c3dfff";

// Arrow symbol or icon for up-page links on Help pages
$UpArrow = "<img src=\"".WT_THEME_DIR."images/uarrow3.gif\" class=\"icon\" border=\"0\" alt=\"^\" />";
