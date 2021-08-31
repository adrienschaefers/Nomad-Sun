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
			<div class="flex-l">

				<!-- Our header image 
					Ajout du "-l" pour ajuster la taille des boites en fonction du VP"
				-->
				<div class="w-100 w-60-l vh-50 vh-100-l bg-right cover bg-center" 
				style="<?php nice_background('Hero_image'); ?>"></div>

				<!-- our header content -->
				<div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
					<!-- data shared from our ero -->
					<div class="tc">
						<!-- Here we use absolute positioning on large screen -->
						<p class="f6 b archivo mt0 mb5 ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
						<?php nice_date(get_field('Date')); ?>
							<span class="line mt4"></span>
						</p>
						
						
						<!-- We change the typescale for larger screens and squish the line height -->
						<!-- standard wordpress data -->
						<h1 class="f2 f1-l archivo mt0 mb1 ttu lh-title">
							<?php the_title(); ?>
						</h1>
						
						<p class="f2 f1-l cardo mt0 mb3  mb5-l ttu lh-title">
						<?php the_field('Subhead'); ?>
						</p>

						<p class="f4 measure i cardo center mv0">
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
