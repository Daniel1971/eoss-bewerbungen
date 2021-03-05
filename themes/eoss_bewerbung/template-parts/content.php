<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eoss_Base_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php eoss_base_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->
	
	<div>
		<a href="<?php the_permalink()?>" class="own-more-link">
                Mehr lesen
            	</a>
	</div>	

	<footer class="entry-footer">
		<?php eoss_base_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
