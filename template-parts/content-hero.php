<!-- Using the_permalink() gives us a link to the post -->


<!-- <h1>
	<a href="<?php the_permalink(); ?>">Check out <?php the_title(); ?></a>
</h1> -->

<!-- Hero needs a background-image on it -->
<!-- Ici on insère du inline CSS dans l'élément HTML et on ajoute du php qui appelle lg BG image -->
<section class="hero min-vh-100 cover bg-center flex items-center 
justify-center" style="<?php nice_background('Hero_image'); ?>">

		<div class="hero-content white tc">

			<!-- our location title -->
			<h1 class="hero-heading bold mb0 m0 ttu archivo"><?php the_title(); ?></h1>

			<!-- our subheading -->
			<?php if( get_field('Subhead') ): ?>
    			<p class="hero-subhead mb6 mt0 ttu"><?php the_field('Subhead'); ?></p>
			<?php endif; ?>

			<!-- our formatted date -->
			<?php if( get_field('Date') ): ?>
			<p class="f6 bold ma0 white ttu archivo">
				<!-- Here we convert the date into a nice format -->
    			<?php nice_date(get_field('Date')); 
								
?>
			</p>
			<?php endif; ?>
		
		</div>
	</section>