<?php

/* 
Template Name: Branding
*/


get_header();
?>

<main id="primary" class="site-main branding_site_main">
    <div class="branding_page_wrapper page_wrapper">
        <h1>RBG <span class="red">Branding</span></h1>
        <div class="branding_content_container">
            <?php while (have_rows('branding')) : the_row(); ?>
                <img src="<?php echo get_sub_field('image')['url'] ?>" alt="">
            <?php endwhile;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
