<?php
/*
Template Name: Page app page
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="Content-entry">
<!-- ======================================= -->

<div class="wrapperblock">
	<div class="home-title blauwig"><p><?php the_title(); ?></p></div>
	<div class="home-content">
		<p>Nu kan er ook gemakkelijk naar informatie over ons bedrijf worden gezocht via de mobiele website van Romario schilders! De app is beschikbaar in Google Play voor Android apparaten en als webap voor IOS (de smartphone van Apple).</p>

		<p>Voor Apple iPhone gebruikers: scan de QR-code of surf naar <a class="linky normaal" href="http://romario-schilders.lokaalgevonden.nl">www.romario-schilders.nl</a>, je krijgt dan een melding ‘plaats deze link naar deze mobiele site’. Tik op ‘zet in de je beginscherm’.</p>

		<div class="app-iphone">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" alt="" />
			</a>
		</div>
		
		<div class="app-google">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" alt="" />
			</a>
		</div>
		
		<img src="#" alt="" />

	</div>
</div>

<!-- ======================================= -->
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>