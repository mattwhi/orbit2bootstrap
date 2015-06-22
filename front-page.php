<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package o2theme
 */

get_header(); ?>

<div id="primary" class="row front-page">
		
<main id="main" class="site-main" role="main">
	<div class="slider">
		<?php putRevSlider( "kenburnsslider" ) ?>
	</div>
<<<<<<< HEAD
<div class="thumbnail-wrapper">
<div class="container">
	<div class="row">
		<?php
	        if ( function_exists( 'ot_get_option' ) ) {
	        	$threecols = ot_get_option( '3_col', array() );
			        if ( ! empty( $threecols ) ) {
			        	$i = 0;
			          foreach( $threecols as $threecol ) {
			          	$i++;
			            echo '<div class="col-sm-6 col-md-4 th-holder thumbnail' . $i . '">
								<div class="thumbnail">
								  <img src="' . $threecol['3_col_image'] . '" alt="' . $threecol['3_col_title'] . '" width="100" height="100">
									  <div class="caption">
									    <h3>' . $threecol['3_col_header'] . '</h3>
									    	<p>' . $threecol['3_col_description'] . '</p>
									    	<p><a class="btn btn-default" href="' . $threecol['3_col_link'] . '" role="button">' . $threecol['3_col_button'] . '</a></p>
									  </div>
								</div>
							</div>';
					}
				}
			}
		?>
=======

<div class="container">
	<div class="row about">
		<div class="col-md-12 text-center">
			<h2>About us</h2>
		</div>
		<div class="col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		<div class="col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
>>>>>>> MW NEW Bits
		</div>
	</div>
</div>
<!--Call to action -->
<div class="callout parallax parallax-window">
	<div class="container">
		<div class="row">
<?php if ( function_exists( 'ot_get_option' ) ) {
	  $callouts = ot_get_option( 'callout', array() );
	  if ( ! empty( $callouts ) ) {
      foreach( $callouts as $callout ) {
echo '
		
			<div class="col-md-12">
				<h2>' . $callout['callout_header'] . '</h2>
				<p>' . $callout['callout_description'] . '</p>
				<p><a class="btn btn-info btn-lg" href="' . $callout['callout_link'] . '" role="button">' . $callout['callout_button'] . '</a></p>
			</div>

';
		}
	}
}
?>
<<<<<<< HEAD
		</div>
	</div>
</div>
=======
<div class="container">
	<div class="row thumbnail-wrapper">
		<?php
	        if ( function_exists( 'ot_get_option' ) ) {
	        	$threecols = ot_get_option( '3_col', array() );
			        if ( ! empty( $threecols ) ) {
			        	$i = 0;
			          foreach( $threecols as $threecol ) {
			          	$i++;
			            echo '<div class="col-sm-6 col-md-3 th-holder thumbnail' . $i . '">
								<div class="thumbnail">
								  <img src="' . $threecol['3_col_image'] . '" alt="' . $threecol['3_col_title'] . '" width="50" height="50">
									  <div class="caption">
									    <h3>' . $threecol['3_col_header'] . '</h3>
									    	<p>' . $threecol['3_col_description'] . '</p>
									    	<p><a class="btn btn-default" href="' . $threecol['3_col_link'] . '" role="button">' . $threecol['3_col_button'] . '</a></p>
									  </div>
								</div>
							</div>';
					}
				}
			}
		?>
	</div>
</div>

>>>>>>> MW NEW Bits
<!-- START THE FEATURETTES -->
<div class="container owl-carousel">
<?php
  if ( function_exists( 'ot_get_option' ) ) {
  	$features = ot_get_option( 'features', array() );
      if ( ! empty( $features ) ) {
        foreach( $features as $feature ) {
          echo '
<div class="item">
  <h2>' . $feature['feature_header'] . '<span class="text-muted">&#160;' . $feature['feature_sub_header'] . '</span></h2>
  <p>' . $feature['feature_description'] . '</p>
  <img src="' . $feature['feature_image'] . '">
</div>';
	 		}
		}
	}
?>
</div>
<<<<<<< HEAD

<div class="contact">
	<div class="container">
		<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
	</div>
</div>

</main><!-- #main -->
=======
<div class="container blog">
<div class="row">
<div class="col-md-12 text-center">
			<h2>From our blog</h2>
		</div>
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts( 'posts_per_page=3' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-frontpage', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>
</div>
	<div class="container contact">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>contact us</h2>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
	</div>
</div>
		</main><!-- #main -->
>>>>>>> MW NEW Bits

</div><!-- #primary -->

<?php get_footer(); ?>