<?php
/**
 * Template part for displaying posts on front page.
 *
 * @package o2theme
 */

?>

<div class="col-md-4">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	<?php
		if ( has_post_thumbnail() ) {
					the_post_thumbnail('full', array( 'class' => 'img-responsive' ) );
					} 
				?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content" style="display:none">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'o2theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
</div>