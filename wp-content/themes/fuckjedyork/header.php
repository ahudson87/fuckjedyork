<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" 
      type="image/png" 
      href="http://fuckjedyork.com/wp-content/uploads/2015/12/FJY-favicon.png">
	<title><?php wp_title(); ?></title>

	<meta property="og:title" content="<?php echo the_title(); ?>" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:type" content="website" />
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <meta property="og:image" content="<?php echo $featured_image[0]; ?>" />
    <?php else : ?>
    <meta property="og:image" content="http://fuckjedyork.com/wp-content/uploads/2015/12/FJY-fb-share-image.jpg" />
    <?php endif; ?>
	<meta property="og:description" content="<?php echo get_the_content() ?>" />
    <meta property="og:site_name" content="<?php echo get_site_url(); ?>" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:image" content="http://fuckjedyork.com/wp-content/uploads/2015/12/FJY-fb-share-image.jpg" />
	<meta name="twitter:site" content="<?php echo get_site_url(); ?>" />
	<?php if( is_single() ) : ?>
	<meta name="twitter:description" content="<?php echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 25 ) ); ?>" />	
	<meta name="twitter:title" content="<?php echo the_title(); ?>" />
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
	    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	    <meta name="twitter:image" content="<?php echo $featured_image[0]; ?>" />		
		<?php endif; ?>
	<?php else : ?>
	<meta name="twitter:description" content="<?php echo get_bloginfo('description') ?>" />
	<meta name="twitter:title" content="<?php echo get_bloginfo('') ?>" />
	<?php endif; ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53406626-2', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>


<?php if( is_single() ) : ?>
<body class="post">
<?php elseif( is_page_template( 'formpage.php' ) ) : ?>
<body class="formpage">
<?php else : ?>
<body class="home">
<?php endif; ?>


<div class="bg-image"></div><!-- BG IMAGE -->
<div class="bg-overlay"></div><!-- BG OVERLAY -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=204982202896511";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

			<div class="hide-for-large-up">
				<div class="menu-bar">
					<button id="mobile-menu" href="#mobile-menu">Menu</button>
					<span>Fuck<em>Jed</em>York<em>.com</em></span>
					
				</div>
				<div id="mobile-menu-holder"><!-- START MOBILE MENU HOLDER -->
					<ul><!-- START MOBILE MENU LIST -->
						<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li><a href="<?php echo site_url( 'contributor-sign-up/' ); ?>">Contribute</a></li>
						<li><a href="<?php echo site_url( 'subscriber-sign-up/' ); ?>">Subscribe</a></li>
					</ul><!-- END MOBILE MENU LIST -->
				</div><!-- END MOBILE MENU HOLDER -->
			</div>

			<!-- main content goes here -->

			<div
			<?php if( is_page_template( 'formpage.php' ) ) : ?>
				id="formpage-parent-row" 
			<?php endif; ?>
			 class="row"> <!-- Start Nav/Section Row -->

				<nav class="show-for-large-up large-2 large-push-10 columns">
					<div id="fixed-nav" class="nav-right">
						<ul>
							<li>
								<a href="<?php echo get_home_url(); ?>" class="link-icon-left"><span class="icon icon-home"></span>Home</a>
							</li>
							<li>
								<a href="<?php echo site_url( 'contributor-sign-up/' ); ?>" class="link-icon-left"><span class="icon icon-contribute"></span>Contribute</a>
							</li>
							<li>
								<a href="<?php echo site_url( 'subscriber-sign-up/' ); ?>" class="link-icon-left"><span class="icon icon-subscribe"></span>Subscribe</a>
							</li>
						</ul>

						<ul class="social-list-desktop">
							<li>
								<div class="fb-like" data-href="http://www.facebook.com/fjedyork" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
							</li>
							<li>
								<a href="https://twitter.com/fork_york" class="twitter-follow-button" data-show-count="false">Follow @fork_york</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
								</script>
							</li>
						</ul>

						<footer class="show-for-large-up">
							<a class="btn" href="mailto:ahudson@alexhudsondesign.com">Email the webmaster</a>
							<span>&#169; Copyright 2015 FuckJedYork.com</span>
						</footer>
					
					</div>
				</nav>