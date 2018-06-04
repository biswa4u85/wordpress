<?php

include_once('widgets_sidebar.php'); // all register sidebar widget

$widget_array = array();

//$widget_array['homebox'] = 'homebox.php';
//$widget_array['contact'] = 'contact.php';
//$widget_array['contactform'] = 'contactform.php';


$widget_array = apply_filters('templ_widgets_listing_filter',$widget_array);

if($widget_array)

{

	foreach($widget_array as $key=>$val)

	{

		if($val)

		{ 

			$filename = $val;

			if(file_exists(TT_WIDGET_FOLDER_PATH.$filename))

			{

				include_once(TT_WIDGET_FOLDER_PATH.$filename);

			}

		}

	}

}

?>