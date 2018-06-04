<?php
// =============================== Login Widget ======================================
class contact_widget extends WP_Widget {
	function contact_widget() {
	//Constructor
		$widget_ops = array('classname' => 'Contact Us', 'description' => apply_filters('templ_contact_widget_desc_filter',__('A simple contact form where site visitors can send you a message with their name and email address.','templatic')) );		
		$this->WP_Widget('widget_contact', apply_filters('templ_contact_widget_title_filter',__('T &rarr; Contact us','templatic')), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$contactinfo = empty($instance['contactinfo']) ? '' : apply_filters('widget_contactinfo', $instance['contactinfo']);
		 ?>						

		<div class="widget social_media">
      		<?php if ( $title <> "" ) { ?><h3> <?php _e($title,'templatic');?></h3><?php } ?>
       		<?php if ( $contactinfo <> "" ) { ?><div><?php echo $contactinfo; ?></div><?php } ?>
        
        
        </div> <!-- widget #end -->
            
            
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['contactinfo'] = ($new_instance['contactinfo']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '','contactinfo' => '' ) );		
		$title = strip_tags($instance['title']);
		$contactinfo = ($instance['contactinfo']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title','templatic');?>: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        
        <p>
          <label for="<?php echo $this->get_field_id('contactinfo'); ?>"><?php _e('Longtext Here','templatic');?> : 
            <textarea name="<?php echo $this->get_field_name('contactinfo'); ?>" cols="20" rows="16" class="widefat" id="<?php echo $this->get_field_id('contactinfo'); ?>"><?php echo attribute_escape($contactinfo); ?></textarea>
          </label></p>
<?php
	}}
register_widget('contact_widget');
?>