<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package o2theme
 */

?>
<section class="container-fluid">
<header class="entry-header text-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->
</section>
<section class="container page-block">
<div class="col-md-8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'o2theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

