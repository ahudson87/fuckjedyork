<?php

function fjy_theme_styles() {
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'fonts_css', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'no-touch_css', get_template_directory_uri() . '/css/no-touch.css' );
	wp_enqueue_style( 'modal_css', get_template_directory_uri() . '/css/modal.css' );
}

add_action( 'wp_enqueue_scripts', 'fjy_theme_styles' );

function fjy_theme_js() {
	wp_enqueue_script( 'jquery' );

	
	// wp_register_script( 'scotchPanels', get_template_directory_uri() .'/js/scotchPanels.js');
	// wp_enqueue_script( 'scotchPanels' );

	wp_register_script( 'modernizr', get_template_directory_uri() .'/js/modernizr.js');
	wp_enqueue_script( 'modernizr' );

	wp_register_script( 'foundation_js', get_template_directory_uri() .'/js/foundation.js');
	wp_enqueue_script( 'foundation_js' );

	wp_register_script( 'foundation_offcanvas_js', get_template_directory_uri() .'/js/foundation.offcanvas.js');
	wp_enqueue_script( 'foundation_offcanvas_js' );

	wp_register_script( 'app_js', get_template_directory_uri() .'/js/app.js');
	wp_enqueue_script( 'app_js' );

	//wp_enqueue_scripts( 'modernizr_js', get_template_directory_uri() . 'js/modernizr.js', '', '', false );
	//wp_enqueue_scripts( 'foundation_js', get_template_directory_uri() . 'js/foundation.js', '', '', true );
	//wp_enqueue_scripts( 'foundation_offcanvas_js', get_template_directory_uri() . 'js/foundation.offcanvas.js', '', '', true );
	//wp_enqueue_scripts( 'app_js', get_template_directory_uri() . 'js/app.js', '', '', true );
}

add_action( 'wp_enqueue_scripts', 'fjy_theme_js' );

add_filter( 'grunion_contact_form_success_message', 'fjy_change_contact_form_success_message' );
function fjy_change_contact_form_success_message( $msg ) {
    global $contact_form_message;
    return '<h3>' . 'Thank you. Your info has been submitted.' . '</h3>' . '<p>' . 'You will be notified via email and prompted to create your password once your account has been activated. In the meantime click <a href="http://www.fuckjedyork.com">Home</a> to read the latest rants of other contributors.' . '</p>' . wp_kses($contact_form_message, array('br' => array(), 'blockquote' => array()));;
}


/**
 * Custom template tags for this theme.
 *
 */
require get_template_directory() . '/inc/template-tags.php';


function fjy_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 45 ); ?>
	
	</div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-text">

		<div class="comment-meta commentmetadata">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
			?>
		</div>

		<?php comment_text(); ?>

		<span>by </span><?php print comment_author() ?>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}



add_filter( 'comment_author', 'fjy_comment_author' );
function fjy_comment_author( $author ) {
	global $comment;

	if ( $comment->user_id )
		$author = '<a class="comment-author-link" href="' . get_author_posts_url( $comment->user_id ) . '">' . $author . '</a>';

	return $author;
}

add_theme_support( 'post-thumbnails' );

// function fb_home_image( $tags ) {
//     if ( is_home() || is_front_page() ) {
//         // Remove the default blank image added by Jetpack
//         unset( $tags['og:image'] );
 
//         $fb_home_img = 'http://fuckjedyork.com/wp-content/uploads/2015/12/FJY-fb-share-image.jpg';
//         $tags['og:image'] = esc_url( $fb_home_img );
//     }
//     return $tags;
// }
// add_filter( 'jetpack_open_graph_tags', 'fb_home_image' );

add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );

?>