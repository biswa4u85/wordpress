<?php
$webnus_team_options_meta = new WPAlchemy_MetaBox(array
(
	'id' => '_page_option_meta',
	'title' => 'Team Options',
	'types' => array('team'),
	'template' => get_template_directory() . '/inc/metaboxes/team_metabox.php',		
));