<?php
/*
Template Name: temp Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="page-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="Content-entry">
				
<div class="u-gridCol7">
	<div class="home-title"><p>Welkom bij Romario!</p></div>
	<div class="home-content">
		<p>Schildersbedrijf Romario staat voor kwalitatief goed schilderwerk op basis van vakmanschap. Onze lijst van tevreden klanten groeit dan ook snel in de regio Den Haag!
	
	Als u op zoek bent naar een betrouwbaar, flexibel en betaalbaar schildersbedrijf dat hoogwaardige kwaliteit garandeert en afspraken respecteert dan bent u bij schildersbedrijf Romario sinds 1996 aan het juiste adres.
	
	U kunt bij Romario terecht voor al uw binnen- of buiten schilderwerk.</p>
	</div>
</div>

<div class"bottom-block">
	<p>Schildersbedrijf Romario levert ambachtelijk vakwerk sinds 1996 en heeft kennis van alle verfsystemen.</p>
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