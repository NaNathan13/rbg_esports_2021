<?php

/* 
Template Name: About
*/


get_header();
?>

<main id="primary" class="site-main about_page">
	<div class="page_wrapper">
		<?php get_template_part('template-parts/heros/fifty_fifty_hero'); ?>

		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();

			endwhile;
		endif;	?>
	</div>
</main>

<?php
get_footer();
