<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

// if it’s a header, go through the data
if( get_row_layout() == 'header' ): ?>

			<!-- Here we have our header -->
			<div class="flex">

				<!-- Our header image -->
				<div class="w-60 min-vh-100 bg-right cover" style="<?php if( get_field('Hero_image') ): ?>
    				background-image: url(<?php the_field('Hero_image'); ?>); <?php endif; ?>"></div>

				<!-- our header content -->
				<div class="w-40">
					<!-- data shared from our ero -->

					<?php the_field('Date'); ?>

					<!-- standard wordpress data -->
					<?php the_title(); ?>
					<?php the_field('subhead'); ?>

					<!-- specific to this component -->
					<?php the_sub_field('header_intro'); ?>


				</div>
			</div>




		
		<!-- if it’s a text component, show us the data -->
		<?php elseif( get_row_layout() == 'text_block' ): ?>
			<?php the_sub_field('text_content'); ?>
		<?php endif; 
		endwhile; endif; ?>

	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
