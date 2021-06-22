<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RBG_Esports
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page_wrapper">
		<?php get_template_part('template-parts/heros/fifty_fifty_hero'); ?>

		<?php
		if (have_posts()) :
			while (have_posts()) : the_content();

			endwhile;
		endif;	?>
	</div>
</main>
<?php
get_sidebar();
get_footer();
