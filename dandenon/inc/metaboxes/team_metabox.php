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
   		<td><b>Qualifications</b></td>
	    <td>
        <input  type="text" name="<?php $metabox->the_name('qualifications'); ?>" value="<?php $metabox->the_value('qualifications'); ?>"/>
	 	</td>
 	</tr>
 	 <tr>
   		<td><b>Languages Known</b></td>
	    <td>
        <input  type="text" name="<?php $metabox->the_name('languages'); ?>" value="<?php $metabox->the_value('languages'); ?>"/>
	 	</td>
 	</tr>
     <tr>
 		<td><b>Upload Image</b></td>
 		<td>
	 		<?php $mb->the_field('ProfileBg'); ?>
			<input  type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" id="Image"/>
			<button name="upload-img" id="upload-img" onclick='return false;'>Browse</button> 
	
	 			
 		</td>
 	</tr>
   </table>
 
   
</p>
<?php endwhile; ?>