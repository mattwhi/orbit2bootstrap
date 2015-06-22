<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package o2theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main row" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				
				<?php endwhile; // End of the loop. ?>

				<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
			</div><!--Col-md-8 -->

				<div class="col-md-4">

					<?php get_sidebar(); ?>

				</div>

			</section>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
