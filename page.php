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

	<div id="primary" class="row">
		
		<main id="main" class="site-main" role="main">
			
			<div class="col-md-8">	
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				
				<?php endwhile; // End of the loop. ?>
			</div>

			<div class="col-md-4">

				<?php get_sidebar(); ?>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
