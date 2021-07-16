<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if(is_singular()) : ?>
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
		<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
