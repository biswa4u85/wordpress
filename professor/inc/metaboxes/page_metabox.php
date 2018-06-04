<?php while($metabox->have_fields('webnus_page_options',1)): ?>
<script type="text/javascript">
			jQuery(document).ready(function(){
	
				var formfield;
				var selected_slide;
				var select_img;
				
				jQuery('#upload-img').click(function() {
					jQuery('html').addClass('Image');
					formfield = jQuery('#Image').attr('name');
					selected_slide = jQuery('#Image');
					select_img = jQuery('#Image').siblings("img");
					tb_show('', 'media-upload.php?type=image&TB_iframe=true');
					return false;
				});
				
				// user inserts file into post. only run custom if user started process using the above process
				// window.send_to_editor(html) is how wp would normally handle the received data
	
				window.original_send_to_editor = window.send_to_editor;
				window.send_to_editor = function(html){

		if (formfield) {
			fileurl = jQuery('img',html).attr('src');
			jQuery(selected_slide).val(fileurl);
			jQuery(select_img).attr('src',fileurl);
			jQuery('html').removeClass('Image');
			tb_remove();
		} else {
			window.original_send_to_editor(html);
		}
	};
});
			</script>
<p>
    <?php $selected = ' selected="selected"'; ?>
    <table width="100%">
 	 <tr>
   		<td><b>Full Page</b></td>
	    <td>
		<input type="checkbox" name="<?php $metabox->the_name('full_page'); ?>" <?php $metabox->the_value('full_page'); ?>  value="checked" data-toggle="toggle">
		On/Off Full Page
	 	</td>
 	</tr>
 	 <tr>
   		<td><b>Left Banner</b></td>
	    <td>
		<textarea name="<?php $metabox->the_name('sub_banner_left'); ?>" rows="4" cols="50">
			<?php $metabox->the_value('sub_banner_left'); ?>
		</textarea>
	 	</td>
 	</tr>
 	<tr>
 		<td><b>Banner Background</b></td>
 		<td>
	 		<?php $mb->the_field('the_page_bg'); ?>
			<input  type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" id="Image"/>
			<button name="upload-img" id="upload-img" onclick='return false;'>Browse</button> 
	
	 			
 		</td>
 	</tr>
		<tr>
   		<td><b>Single Banner Text</b></td>
	    <td>
		<textarea name="<?php $metabox->the_name('sub_title_text'); ?>" rows="4" cols="50">
			<?php $metabox->the_value('sub_title_text'); ?>
		</textarea>
	 	</td>
 	</tr>
   </table>
 
   
</p>
<?php endwhile; ?>