<?php
/**
 * Template Name: Form Page
 *
 * @package WordPress
 * @subpackage fuckjedyork
 */
?>

<?php get_header(); ?>

		<section id="content" class="large-10 large-pull-2 columns">

			<div class="formpage-contents"> <!-- start contribute contents -->

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					
					<?php the_content() ?>

				   <?php endwhile; endif;?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) :
					//	comments_template();
					//endif; ?>

			</div> <!-- end contribute contents -->

		</section>

	</div> <!-- End Nav/Section Row -->

<?php get_footer(); ?>
