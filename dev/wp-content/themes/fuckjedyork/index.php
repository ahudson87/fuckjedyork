<?php get_header(); ?>

		<section id="content" class="large-10 large-pull-2 columns">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<div class="entry">
						<a href="<?php the_permalink(); ?>">
							<span class="cta">Read Rant</span>
							<h1><?php the_title() ?></h1>
						</a>
						<!--a href="#" class="author-link"-->
						<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<span class="author"><?php the_author() ?></span><span class="icon icon-author"></span>
						</a>
					</div>

				   <?php endwhile; endif; ?>

		</section>

	</div> <!-- End Nav/Section Row -->

<?php get_footer(); ?>