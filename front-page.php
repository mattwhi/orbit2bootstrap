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
					<?php putRevSlider( "homepage" ) ?>
				</div>
			<div class="container">
<div class="row">
	<?php
        if ( function_exists( 'ot_get_option' ) ) {
        	$threecols = ot_get_option( '3_col', array() );
		        if ( ! empty( $threecols ) ) {
		          foreach( $threecols as $threecol ) {
		            echo '<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
							  <img src="' . $threecol['3_col_image'] . '" alt="' . $threecol['3_col_title'] . '" width="180" height="180">
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
<!--Call to action -->
<div class="row">
	<div class="well well-lg">...</div>
</div>

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">
        
<?php
  if ( function_exists( 'ot_get_option' ) ) {
  	$features = ot_get_option( 'features', array() );
      if ( ! empty( $features ) ) {
        foreach( $features as $feature ) {
          echo '
		      <div class="row featurette">
		        <div class="col-md-7">
		          <h2 class="featurette-heading">' . $feature['feature_header'] . '<span class="text-muted">&#160;' . $feature['feature_sub_header'] . '</span></h2>
		          <p class="lead">' . $feature['feature_description'] . '</p>
		        </div>
		        <div class="col-md-5">
		          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="' . $feature['feature_image'] . '" data-holder-rendered="true">
		        </div>
		      </div>
  			<hr class="featurette-divider">';
	 		}
		}
	}
?>
			</div>	
		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>