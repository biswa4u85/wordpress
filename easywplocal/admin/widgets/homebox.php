<?php
// =============================== Testimonials  Widget======================================
class templ_homeboxs_widget extends WP_Widget {
	function templ_homeboxs_widget() {
	//Constructor
		$widget_ops = array('classname' => 'widget homeboxs', 'description' => apply_filters('templ_homebox_widget_desc_filter',__('Homebox Widget','templatic')) );		
		$this->WP_Widget('homeboxs_widget',apply_filters('templ_homebox_widget_title_filter',__('T &rarr; Homebox','templatic')), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$name1 = empty($instance['name1']) ? '' : apply_filters('widget_name1', $instance['name1']);
		$link1 = empty($instance['link1']) ? '' : apply_filters('widget_link1', $instance['link1']);
		$quotetext1 = empty($instance['quotetext1']) ? '' : apply_filters('widget_quotetext1', $instance['quotetext1']);
		$name2 = empty($instance['name2']) ? '' : apply_filters('widget_name2', $instance['name2']);
		$link2 = empty($instance['link2']) ? '' : apply_filters('widget_link2', $instance['link2']);
		$quotetext2 = empty($instance['quotetext2']) ? '' : apply_filters('widget_quotetext2', $instance['quotetext2']);
		$name3 = empty($instance['name3']) ? '' : apply_filters('widget_name3', $instance['name3']);
		$link3 = empty($instance['link3']) ? '' : apply_filters('widget_link3', $instance['link3']);
		$quotetext3 = empty($instance['quotetext3']) ? '' : apply_filters('widget_quotetext3', $instance['quotetext3']);
		 ?>						
 
      
         
        <div class="span4">
        	<?php if($name1){?><h3><?php echo $name1; ?></h3><?php }?>
            <?php if($quotetext1){?><p><?php echo $quotetext1; ?></p><?php }?>
            <?php if($link1){?><a href="<?php echo $link1; ?>">Read more >></a><?php }?>			  
        </div>
        
        <div class="span4">
        	<?php if($name2){?><h3><?php echo $name2; ?></h3><?php }?>
            <?php if($quotetext2){?><p><?php echo $quotetext2; ?></p><?php }?>
            <?php if($link2){?><a href="<?php echo $link2; ?>">Read more >></a><?php }?>			  
        </div>
        
        <div class="span4">
        	<?php if($name3){?><h3><?php echo $name3; ?></h3><?php }?>
            <?php if($quotetext3){?><p><?php echo $quotetext3; ?></p><?php }?>
            <?php if($link3){?><a href="<?php echo $link3; ?>">Read more >></a><?php }?>			  
        </div>
        
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['name1'] = ($new_instance['name1']);
		$instance['link1'] = ($new_instance['link1']);
		$instance['quotetext1'] = ($new_instance['quotetext1']);
		$instance['name2'] = ($new_instance['name2']);
		$instance['link2'] = ($new_instance['link2']);
		$instance['quotetext2'] = ($new_instance['quotetext2']);
		$instance['name3'] = ($new_instance['name3']);
		$instance['link3'] = ($new_instance['link3']);
		$instance['quotetext3'] = ($new_instance['quotetext3']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'name1' => '', 'link1' => '',  'quotetext1' => '', 'name2' => '', 'link2' => '',  'quotetext2' => '', 'name3' => '', 'link3' => '',  'quotetext3' => '' ) );		
		$title = strip_tags($instance['title']);
		$name1 = ($instance['name1']);
		$link1 = ($instance['link1']);
		$quotetext1 = ($instance['quotetext1']);
		$name2 = ($instance['name2']);
		$link2 = ($instance['link2']);
		$quotetext2 = ($instance['quotetext2']);
		$name3 = ($instance['name3']);
		$link3 = ($instance['link3']);
		$quotetext3 = ($instance['quotetext3']);
?>

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<p><i><u>Box One</u></i></p>
<p><label for="<?php echo $this->get_field_id('name1'); ?>"><?php _e('name1:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('name1'); ?>" name="<?php echo $this->get_field_name('name1'); ?>" type="text" value="<?php echo attribute_escape($name1); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('link1'); ?>"><?php _e('link1:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('link1'); ?>" name="<?php echo $this->get_field_name('link1'); ?>" type="text" value="<?php echo attribute_escape($link1); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('quotetext1'); ?>"><?php _e('Quote text 1','templatic');?>  : <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quotetext1'); ?>" name="<?php echo $this->get_field_name('quotetext1'); ?>"><?php echo attribute_escape($quotetext1); ?></textarea></label></p>
<p><i><u>Box Two</u></i></p>
<p><label for="<?php echo $this->get_field_id('name2'); ?>"><?php _e('name2:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('name2'); ?>" name="<?php echo $this->get_field_name('name2'); ?>" type="text" value="<?php echo attribute_escape($name2); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('link2'); ?>"><?php _e('link2:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('link2'); ?>" name="<?php echo $this->get_field_name('link2'); ?>" type="text" value="<?php echo attribute_escape($link2); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('quotetext2'); ?>"><?php _e('Quote text 2','templatic');?>  : <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quotetext2'); ?>" name="<?php echo $this->get_field_name('quotetext2'); ?>"><?php echo attribute_escape($quotetext2); ?></textarea></label></p>
<p><i><u>Box Three</u></i></p>
<p><label for="<?php echo $this->get_field_id('name3'); ?>"><?php _e('name3:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('name3'); ?>" name="<?php echo $this->get_field_name('name3'); ?>" type="text" value="<?php echo attribute_escape($name3); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('link3'); ?>"><?php _e('link3:','templatic');?> <input class="widefat" id="<?php echo $this->get_field_id('link3'); ?>" name="<?php echo $this->get_field_name('link3'); ?>" type="text" value="<?php echo attribute_escape($link3); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('quotetext3'); ?>"><?php _e('Quote text 3','templatic');?>  : <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quotetext3'); ?>" name="<?php echo $this->get_field_name('quotetext3'); ?>"><?php echo attribute_escape($quotetext3); ?></textarea></label></p>

<?php
	}}
register_widget('templ_homeboxs_widget');
?>