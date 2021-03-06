<?php
/**
 * Custom template tags for Fuck Jed York
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 */

if ( ! function_exists( 'fuckjedyork_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 */
function fuckjedyork_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'fuckjedyork' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'fuckjedyork' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'fuckjedyork' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;