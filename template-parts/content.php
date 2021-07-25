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


<!-- Hero needs a background-image on it -->
<!-- Ici on insère du inline CSS dans l'élément HTML et on ajoute du php qui appelle lg BG image -->
	<section class="hero" style="<?php if( get_field('Hero_image') ): ?>
    background-image: url(<?php the_field('Hero_image'); ?>);
<?php endif; ?>">

		<div class="hero-content">

			<!-- our location title -->
			<h1><?php the_title(); ?></h1>

			<!-- our subheading -->
			<?php if( get_field('Subhead') ): ?>
    			<h2><?php the_field('Subhead'); ?></h2>
			<?php endif; ?>

			<!-- our formatted date -->
			<?php if( get_field('Date') ): ?>
			<p>
				<!-- Here we convert the date into a nice format -->
    			<?php echo date("F Y", strtotime(get_field('Date') )) ?>
			</p>
			<?php endif; ?>
		
		</div>
	</section>

	<header class="entry-header">
	</header><!-- .entry-header -->


	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
