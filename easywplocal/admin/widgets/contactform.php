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
		 ?>						
<div id="contact-wrapper">
<?php
@session_start();
$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$fullname = ''; $email = '';  $telephone = ''; $comment = '';
$success = $message = $err = $act = '';

if ( isset($_REQUEST['act']) ) $act = $_REQUEST['act'];
if ( isset($_REQUEST['fullname']) ) $fullname = $_REQUEST['fullname'];
if ( isset($_REQUEST['email']) ) $email = $_REQUEST['email'];
if ( isset($_REQUEST['telephone']) ) $telephone = $_REQUEST['telephone'];
if ( isset($_REQUEST['comment']) ) $comment = $_REQUEST['comment'];
if( $act == 'submit' )
{   
	if ( $_REQUEST['code'] != $_SESSION['securimage_code_value'] ) $err = 'Invalid security code.';

	if ( $err == '' )
	{
		$to		 = $_POST['emailto'];
		$from    = $_POST['emailto'];
		$subject = "New Lead From ".$_POST['thanksurl'] ;
		$email_from_nice = $_POST['blogname'];
        
		

$message = "<table width='100%' border='0' cellspacing='0' cellpadding='0'>
				  <tr>
					<td width='10%'>Name:-</td>
					<td align='left' width='90%'>$fullname</td>
				  </tr>
				   <tr>
				   <td width='10%'>Email :-</td>
					<td align='left'  width='90%'>$email</td>
				  </tr>	
				  <tr>
				  <td width='10%'>Phone:-</td>
					<td align='left'  width='90%'>$telephone</td>
				  </tr>  
				  <tr>
				   <td width='10%'>Message:-</td>
					<td align='left'  width='90%'>$comment</td>
				  </tr>
				</table>";

		$headers = 'From: '.$email_from_nice.' <'.$to.'>' . "\r\n" . 'Reply-To: ' . $email;
		// Generate a boundary string
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		
		// Add the headers for a file attachment
		$headers .= "\nMIME-Version: 1.0\n" .
				  "Content-Type: multipart/mixed;\n" .
				  " boundary=\"{$mime_boundary}\"";
		
		// Add a multipart boundary above the plain message
		$message1 = "This is a multi-part message in MIME format.\n\n" .
				 "--{$mime_boundary}\n" .
				 "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
				 "Content-Transfer-Encoding: 7bit\n\n" .
				 $message . "\n\n";
		 
		// Send the message
		@mail($to, $subject, $message1, $headers);
		$emailSent = true;
	}
}
?>
	<!--Form Validation -->
    <script type="text/javascript">
	var $j = jQuery.noConflict();
    $j(document).ready(function(){
        $j("#contactform").validate();
    });
    </script>
			<?php if(isset($emailSent) && $emailSent == true) { ?>
            	<?php if ( $title <> "" ) { ?><h3><strong><?php _e($title,'templatic');?></strong></h3><?php } ?>
       			<?php if ( $contactforminfo <> "" ) { ?><div><strong><?php echo $fullname;?></strong>, <?php echo $contactforminfo; ?></div><?php } ?>
            <?php } else { ?>
             <form method="post" action="<?php echo $actual_link ?>" id="contactform">
             	<input type="hidden" name="act" id="act" value="submit" />
                <div class="row-fluid martop10">
				<div class="span6">
					<p><input name="fullname" type="text" class="small required" id="fullname" placeholder="Name" value="<?php echo $_POST['fullname']; ?>" /></p>
					<p><input name="email" type="text" class="small required email" id="email" placeholder="Email" value="<?php echo $_POST['email']; ?>" /></p>
					<p><input name="telephone" type="text" class="small required number" id="telephone" placeholder="Contact Number" value="<?php echo $_POST['telephone']; ?>" /></p>
                    <p><img class="captch" src="<?php echo get_template_directory_uri();?>/assets/img/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" alt="" /></p>
                        <p><input type="text" name="code" id="code" class="small" /><br />
                        <span class="error"><?php if ( $err != '' ) echo $err.'<br />'; ?></span></p>
                </div>
				<div class="span6">
					<p><textarea placeholder="Message" class="big" name="comment" id="comment"><?php echo $_POST['comment']; ?></textarea></p>
                    <p><input name="blogname" type="hidden" id="blogname" value="<?php bloginfo('blogname'); ?>" /></p>
                    <p><input name="emailto" type="hidden" id="emailto" value="<?php bloginfo('admin_email'); ?>" /></p>
                    <p><input name="thanksurl" type="hidden" id="thanksurl" value="<?php echo home_url('/'); ?>" /></p>
					<p><input type="submit" name="submit" class="submit" value="Submit" /></p>
				</div>
			</div>
            </form>
           <?php } ?>

</div>

	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['contactforminfo'] = ($new_instance['contactforminfo']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '','contactforminfo' => '' ) );		
		$title = strip_tags($instance['title']);
		$contactforminfo = ($instance['contactforminfo']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title','templatic');?>: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        
        <p>
          <label for="<?php echo $this->get_field_id('contactforminfo'); ?>"><?php _e('Longtext Here','templatic');?> : 
            <textarea name="<?php echo $this->get_field_name('contactforminfo'); ?>" cols="20" rows="16" class="widefat" id="<?php echo $this->get_field_id('contactforminfo'); ?>"><?php echo attribute_escape($contactforminfo); ?></textarea>
          </label></p>
<?php
	}}
register_widget('contactform_widget');
?>