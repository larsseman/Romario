 <?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="home-title groenig">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="Content-text">
					<div class="white-wrapper">
						<hr>
						<div class="u-gridRow">					
							<div class="adress u-gridCol4">
								<div class="adress-info">
									<p>Mario Warmenhoven</p>
									<p>Huis te Landelaan 134</p>
									<p>2283 SK Rijswijk (ZH)</p>
									<p>KvK 27171068</p>
								</div>
							</div>					
							<div class="adress-map u-gridCol8">
								<div id="map_canvas"></div>
							</div>
						</div> <!-- /gridRow -->
						<hr>
					
						<div class="u-gridRow">						
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>