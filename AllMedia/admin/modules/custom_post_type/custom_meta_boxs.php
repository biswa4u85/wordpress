<?php
//Teams Sponsor Boxes
add_action( 'add_meta_boxes', 'add_sponsor_metaboxes' );

// Add the Sponsor Meta Boxes
function add_sponsor_metaboxes() {
	add_meta_box('wpt_sponsor_metaboxes', 'Sponsor Details', 'wpt_sponsor_metaboxes', 'sponsor', 'normal', 'default');
}

// The Sponsor Metabox
function wpt_sponsor_metaboxes() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the Data
	$Link = get_post_meta($post->ID, '_Link', true);
	
	// Echo out the field
	echo '<input type="text" name="_Link" placeholder="Link" value="' . $Link  . '" style="margin:5px 0; width:100%;" />';

}

// Save the Metabox Data
add_action('save_post', 'wpt_save_sponsor_meta', 1, 2); // save the custom fields
function wpt_save_sponsor_meta($post_id, $post) {
	
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
	
	$events_meta['_Link'] = $_POST['_Link'];
	
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
	$Icon = get_post_meta($post->ID, '_Icon', true);
	$Details = get_post_meta($post->ID, '_Details', true);
	
	// Echo out the field
	echo '<input type="text" name="_Icon" placeholder="Icon" value="' . $Icon  . '" style="margin:5px 0; width:100%;" />';
	echo '<textarea name="_Details" placeholder="Details" style="margin:5px 0; width:100%;">' . $Details  . '</textarea>';

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
	
	$events_meta['_Icon'] = $_POST['_Icon'];
	$events_meta['_Details'] = $_POST['_Details'];
	
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


//Teams Meta Boxes
add_action( 'add_meta_boxes', 'add_teams_metaboxes' );

// Add the Teams Meta Boxes
function add_teams_metaboxes() {
	add_meta_box('wpt_teams_metaboxes', 'Team Details', 'wpt_teams_metaboxes', 'team', 'normal', 'default');
}

// The Teams Metabox
function wpt_teams_metaboxes() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the Data
	$Position = get_post_meta($post->ID, '_Position', true);
	$Facebook = get_post_meta($post->ID, '_Facebook', true);
	$Linkedin = get_post_meta($post->ID, '_Linkedin', true);
	$Pinterest = get_post_meta($post->ID, '_Pinterest', true);
	
	// Echo out the field
	echo '<input type="text" name="_Position" placeholder="Position" value="' . $Position  . '" style="margin:5px 0; width:100%;" />';
	echo '<input type="text" name="_Facebook" placeholder="Facebook" value="' . $Facebook  . '" style="margin:5px 0; width:100%;" />';
	echo '<input type="text" name="_Linkedin" placeholder="Linkedin" value="' . $Linkedin  . '" style="margin:5px 0; width:100%;" />';
	echo '<input type="text" name="_Pinterest" placeholder="Pinterest" value="' . $Pinterest  . '" style="margin:5px 0; width:100%;" />';

}

// Save the Metabox Data
add_action('save_post', 'wpt_save_teams_meta', 1, 2); // save the custom fields
function wpt_save_teams_meta($post_id, $post) {
	
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
	
	$events_meta['_Position'] = $_POST['_Position'];
	$events_meta['_Facebook'] = $_POST['_Facebook'];
	$events_meta['_Linkedin'] = $_POST['_Linkedin'];
	$events_meta['_Pinterest'] = $_POST['_Pinterest'];
	
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

?>