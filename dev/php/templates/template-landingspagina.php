 <?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">

				<div class="home-title roodig">
					<h2><?php the_title(); ?></h2>
				</div>

				<div class="Content-text">
					<div class="white-wrapper">
							<?php the_content(); ?>						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</div>
				</div> <!-- content-text -->

				<div class="bottom-block rood">
					<p>Schildersbedrijf Romario levert ambachtelijk vakwerk sinds 1996 en heeft kennis van alle verfsystemen.</p>
				</div>

			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>