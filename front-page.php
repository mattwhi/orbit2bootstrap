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
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="..." alt="...">
					      <div class="caption">
					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      </div>
					    </div>
					  </div>

					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="..." alt="...">
					      <div class="caption">
					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      </div>
					    </div>
					  </div>

					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="..." alt="...">
					      <div class="caption">
					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      </div>
					    </div>
					  </div>
				</div>
				<div class="row">
					<div class="well well-lg">...</div>
				</div>
			</div>	
		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>