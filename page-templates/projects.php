<?php
/*
* Template Name: Projects
* The projects page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="projectsPage">
    <?php get_template_part('parts/section', 'jobdescription'); ?>
    <?php get_template_part('parts/section', 'ournumbers'); ?>
    <?php get_template_part('parts/section', 'priority'); ?>
    <?php get_template_part('parts/section', 'quickquote'); ?>

    <div class="pt-7">
        <?php get_template_part('parts/section', 'testimonials'); ?>
    </div>

    <?php get_template_part('parts/section', 'ourclient'); ?>
    <?php get_template_part('parts/section', 'promotions'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>