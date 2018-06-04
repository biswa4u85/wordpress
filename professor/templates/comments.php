<?php
if (post_password_required()) {
  return;
}
?>

<div class="comments-area space-top-60">
   <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

<ul>
<?php //wp_list_comments('type=comment');

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div class="media" id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard media-left">
         <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>         
      </div>
      <div class="media-body">
      <?php printf(__('<b>%s</b> | '), get_comment_author_link()) ?>
      <span><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></span>
      <ul class="list-inline pull-right">
    <li><i class="fa fa-reply" aria-hidden="true"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></li>    
    </ul>
      <?php if ($comment->comment_approved == '0') : ?>
         <p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
      <?php endif; ?>
      <?php comment_text() ?>
      </div>
     </div>
<?php
        }
        wp_list_comments('type=comment&callback=mytheme_comment');
 ?>
</ul>



    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif; ?> 



</div>

<!-- comments Form -->
<div class="comment-form-area space-top-60">
  <div role="form" action="" method="post" class="form-area">
    <div class="controls">
      <h2>Post your comments</h2>
      <div class="row">
        <?php
        $args = array(
        'fields' => apply_filters(
        'comment_form_default_fields', array(
        'author' =>'<div class="col-md-6"><div class="form-group">' . '<input id="author" class="form-control" placeholder="Enter Your Name *" name="author" type="text" value="' .
        esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
        '' .
        ( $req ? '' : '' )  .
        '</div></div>'
        ,
        'email'  => '<div class="col-md-6"><div class="form-group">' . '<input id="email" class="form-control" placeholder="Enter your Email *" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' />'  .
        '' .
        ( $req ? '' : '' ) 
        .
        '</div></div>',
        'url'    => '<div class="col-md-12"><div class="form-group">' .
        '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
        '' .
        '</div></div>'
        )
        ),
        'comment_field' => '<div class="col-md-12"><div class="form-group">' .
        '' .
        '<textarea id="comment" name="comment" placeholder="Enter Your Message *" class="form-control" cols="45" rows="8" aria-required="true"></textarea>' .
        '</div></div>',
        'comment_notes_after' => '',
        'title_reply' => ''
        );
        ?>
        <?php comment_form($args, $post_id); ?>
      </div>
    </div>
  </div>
</div>