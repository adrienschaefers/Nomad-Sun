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
	<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('Hero_image') ): ?>
    background-image: url(<?php the_field('Hero_image'); ?>);
<?php endif; ?>">

		<div class="hero-content white tc">

			<!-- our location title -->
			<h1 class="hero-heading bold mb0 m0 ttu archivo"><?php the_title(); ?></h1>

			<!-- our subheading -->
			<?php if( get_field('Subhead') ): ?>
    			<p class="hero-subhead mb6 mt0 ttu tenor"><?php the_field('Subhead'); ?></p>
			<?php endif; ?>

			<!-- our formatted date -->
			<?php if( get_field('Date') ): ?>
			<p class="f6 bold ma0 white ttu archivo">
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
