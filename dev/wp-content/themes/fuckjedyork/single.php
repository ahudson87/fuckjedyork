<?php get_header(); ?>

		<section id="content" class="large-10 large-pull-2 columns">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<div class="entry">
						<h1><?php the_title() ?></h1>
						<h4><?php the_date(); ?></h4>
						<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<span class="author"><?php the_author() ?></span><span class="icon icon-author"></span>
						</a>
						<?php the_content() ?>
					</div>

				   <?php endwhile; endif;?>


					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

					<!-- <div class="comments-preivew">
						<h1>Coming Soon!xxx</h1>
						<p>Full commenting ability.</p>
					</div> -->

		</section>

	</div> <!-- End Nav/Section Row -->


<?php get_footer(); ?>
