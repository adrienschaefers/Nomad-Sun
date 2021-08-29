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
				<div class="w-40 flex items-center justify-center ph4 ">
					<!-- data shared from our ero -->
					<div class="tc">
						<p class="f6 b archivo mt0 mb5 ttu tracked">
							<?php echo date("F Y", strtotime(get_field('Date') )) ?>
						</p>
						
						<!-- standard wordpress data -->
						<h1 class="f1 archivo mt0 mb1 ttu">
							<?php the_title(); ?>
						</h1>
						
						<p class="f1 cardo mt0 mb3 ttu">
						<?php the_field('Subhead'); ?>
						</p>

						<p class="f4 measure i cardo center">
							<?php the_sub_field('header_intro'); ?>
						</p>
					</div>
					<!-- specific to this component -->
					


				</div>
			</div>




		
		<!-- if it’s a text component, show us the data -->
		<?php elseif( get_row_layout() == 'text_block' ): ?>
			<!-- <this is our text block -->
			<div  class="pv6 measure-wide center text-block ">
				<?php the_sub_field('text_content'); ?>
			</div>

		<?php endif; 
		endwhile; endif; ?>

	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
