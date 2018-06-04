<?php


//Testimonial Meta Boxes
add_action( 'add_meta_boxes', 'add_testimonial_metaboxes' );

// Add the Testimonial Meta Boxes
function add_testimonial_metaboxes() {
	add_meta_box('wpt_testimonial_metaboxes', 'Testimonial Rateing', 'wpt_testimonial_metaboxes', 'testimonial', 'normal', 'default');
}

// The Testimonial Metabox
function wpt_testimonial_metaboxes() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the Data
	$Rate = get_post_meta($post->ID, '_Rate', true);
	
	// Echo out the field
	?>
	<p>
        <input type="radio" name="_Rate" value="1" <?php echo ($Rate == '1')? 'checked="checked"':''; ?>/> 1<br />
        <input type="radio" name="_Rate" value="2" <?php echo ($Rate == '2')? 'checked="checked"':''; ?>/> 2<br />
        <input type="radio" name="_Rate" value="3" <?php echo ($Rate == '3')? 'checked="checked"':''; ?>/> 3<br />
        <input type="radio" name="_Rate" value="4" <?php echo ($Rate == '4')? 'checked="checked"':''; ?>/> 4<br />
        <input type="radio" name="_Rate" value="5" <?php echo ($Rate == '5')? 'checked="checked"':''; ?>/> 5<br />
    </p>
	<?php

}

// Save the Metabox Data
add_action('save_post', 'wpt_save_testimonial_meta', 1, 2); // save the custom fields
function wpt_save_testimonial_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	
	$events_meta['_Rate'] = $_POST['_Rate'];
	
	// Add values of $events_meta as custom fields
	
	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}


//Teams Service Boxes
add_action( 'add_meta_boxes', 'add_service_metaboxes' );

// Add the Sponsor Meta Boxes
function add_service_metaboxes() {
	add_meta_box('wpt_service_metaboxes', 'Service Details', 'wpt_service_metaboxes', 'service', 'normal', 'default');
}

// The Service Metabox
function wpt_service_metaboxes() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the Data
	$Details = get_post_meta($post->ID, '_Details', true);
	$Sclass = get_post_meta($post->ID, '_Sclass', true);
	
	// Echo out the field
	echo '<textarea name="_Details" placeholder="Details" style="margin:5px 0; width:100%;">' . $Details  . '</textarea>';
	echo '<input name="_Sclass" placeholder="Add Class (Like ibox1 )"  style="margin:5px 0; width:100%;" value="' . $Sclass  . '"></input>';

}

// Save the Metabox Data
add_action('save_post', 'wpt_save_service_meta', 1, 2); // save the custom fields
function wpt_save_service_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	
	$events_meta['_Details'] = $_POST['_Details'];
	$events_meta['_Sclass'] = $_POST['_Sclass'];
	
	// Add values of $events_meta as custom fields
	
	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

?>