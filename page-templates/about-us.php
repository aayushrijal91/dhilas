<?php
/*
* Template Name: About Us
* The about us page
*/
get_header();
// get_template_part('parts/section', 'nav');
?>

<main class="aboutuspage">
    <?php get_template_part('parts/section', 'quickquote'); ?>

    <?php get_template_part('parts/section', 'about'); ?>

    <?php get_template_part('parts/section', 'services'); ?>

    <?php get_template_part('parts/section', 'ournumbers'); ?>

    <?php get_template_part('parts/section', 'jobdescription'); ?>

    <?php get_template_part('parts/section', 'priority'); ?>

    <?php get_template_part('parts/section', 'testimonials'); ?>

    <?php get_template_part('parts/section', 'ourclient'); ?>

    <?php get_template_part('parts/section', 'promotions'); ?>

    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>