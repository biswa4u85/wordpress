<?php
// =============================== Login Widget ======================================
class contactform_widget extends WP_Widget {
	function contactform_widget() {
	//Constructor
		$widget_ops = array('classname' => 'contact Form', 'description' => apply_filters('templ_contactform_widget_desc_filter',__('A simple contactform form where site visitors can send you a message with their name and email address.','templatic')) );		
		$this->WP_Widget('widget_contactform', apply_filters('templ_contactform_widget_title_filter',__('T &rarr; Contact Form','templatic')), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$contactforminfo = empty($instance['contactforminfo']) ? '' : apply_filters('widget_contactforminfo', $instance['contactforminfo']);
		$thanksinfo = empty($instance['thanksinfo']) ? '' : apply_filters('widget_thanksinfo', $instance['thanksinfo']);
		echo $thanksinfo;
		 ?>						
<div id="contact-wrapper">
			<div class="banner-form">
			<?php if ( $title <> "" ) { ?><h2><?php _e($title,'templatic');?></h2><?php } ?>
            	<?php if ( $contactforminfo <> "" ) { ?><h4><?php echo $contactforminfo; ?></h4><?php } ?>
             	<?php echo do_shortcode($thanksinfo); ?>
           </div></div>

	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['contactforminfo'] = ($new_instance['contactforminfo']);
		$instance['thanksinfo'] = ($new_instance['thanksinfo']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '','contactforminfo' => '' ) );		
		$title = strip_tags($instance['title']);
		$contactforminfo = ($instance['contactforminfo']);
		$thanksinfo = ($instance['thanksinfo']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title','templatic');?>: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        
        <p>
          <label for="<?php echo $this->get_field_id('contactforminfo'); ?>"><?php _e('Longtext Here','templatic');?> : 
            <textarea name="<?php echo $this->get_field_name('contactforminfo'); ?>" cols="20" rows="5" class="widefat" id="<?php echo $this->get_field_id('contactforminfo'); ?>"><?php echo attribute_escape($contactforminfo); ?></textarea>
          </label></p>
          <p>
          <label for="<?php echo $this->get_field_id('thanksinfo'); ?>"><?php _e('Shortcode Here','templatic');?> : 
            <textarea name="<?php echo $this->get_field_name('thanksinfo'); ?>" cols="20" rows="5" class="widefat" id="<?php echo $this->get_field_id('thanksinfo'); ?>"><?php echo attribute_escape($thanksinfo); ?></textarea>
          </label></p>
<?php
	}}
register_widget('contactform_widget');
?>