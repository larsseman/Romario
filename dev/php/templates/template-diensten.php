<?php
/*
Template Name: temp Diensten
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
	<div class="u-gridCol7">
		<div class="home-title bruinig"><p><?php the_title(); ?></p></div>
		<div class="home-content">
			<p>Schildersbedrijf Romario is thuis in de meest uiteenlopende schilderwerkzaamheden voor zowel particuliere als zakelijk opdrachtgevers (o.a. aannemers, makelaars), vve's, zorginstellingen en verzekeraars.</p>

<p>Romario is lid van het Sikkens huisschilderplan. Op deze manier bent u verzekerd van vakmensen die weten wat er nodig is voor een resultaat waarover u tevreden zult zijn.</p>
			<div class="linky"><a href="http://www.sikkens.nl/home">Lees hier meer over het Sikkens huisschilderplan »</a></div>
		</div>
	</div>

	<div class="bottom-block bruin">
		<p>Schildersbedrijf Romario levert ambachtelijk vakwerk sinds 1996 en heeft kennis van alle verfsystemen.</p>
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