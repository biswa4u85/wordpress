<?php
$webnus_page_options_meta = new WPAlchemy_MetaBox(array
(
	'id' => '_page_option_meta',
	'title' => 'Page Options',
	'types' => array('page'),
	'template' => get_template_directory() . '/inc/metaboxes/page_metabox.php',		
));

$webnus_team_options_meta = new WPAlchemy_MetaBox(array
(
	'id' => '_team_option_meta',
	'title' => 'Page Options',
	'types' => array('team'),
	'template' => get_template_directory() . '/inc/metaboxes/team_metabox.php',		
));
