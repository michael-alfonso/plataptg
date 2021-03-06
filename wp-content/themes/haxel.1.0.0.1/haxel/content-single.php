<?php
/**
 * @package haxel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="featured-image">
			<?php the_post_thumbnail('full'); ?>
		</div>
			
			
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'haxel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php haxel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
