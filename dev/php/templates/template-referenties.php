<?php
/*
Template Name: temp Referenties
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
	<div class="u-gridRow">
		<div class="u-gridCol5">
			<div class="home-title blauwig"><p><?php the_title(); ?></p></div>
			<div class="home-content">
				<?php the_content(); ?>		
			</div>
		</div>
		<div class="u-gridCol7">
			<div class="home-title blauwig"><p>Impressie</p></div>
			<div class="home-slider">
				<div class="bxslider">
					<?php for($i = 1; $i <= 7; $i++){ ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/referenties/<?php echo $i; ?>.jpg" 
								class="Slide"/>			
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-block blauw">
	<p><?php include_once('slogan.php'); ?></p>

	</div>
</div>

<!-- ======================================= -->
					<?php //the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div> 

<?php get_footer(); ?>
