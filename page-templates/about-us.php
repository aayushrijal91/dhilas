<?php
/*
* Template Name: About Us
* The about us page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="aboutuspage">
    <section class="py-7 py-md-10 introduction">
        <?php $introduction = get_field('introduction'); ?>
        <div class="container position-relative">
            <?php if (!empty($introduction['subtitle'])) : ?>
                <p class="fs-32 fw-500" data-aos="fade-up"><?= $introduction['subtitle'] ?></p>
            <?php endif; ?>

            <?php if (!empty($introduction['title'])) : ?>
                <p data-aos="fade-up" class="fs-52 text-uppercase lh-1 fw-800 text-tertiary pt-3 highlight-primary"><?= $introduction['title'] ?></p>
            <?php endif; ?>

            <div class="col-md-5 col-lg-4 py-4" data-aos="fade-up">
                <div class="divider bg-tertiary"></div>
            </div>

            <?php if (!empty($introduction['description'])) : ?>
                <article class="col-xl-7 fs-18 text-tertiary lh-1_5" data-aos="fade-up">
                    <?= $introduction['description'] ?>
                </article>
            <?php endif; ?>

            <?php if (!empty($introduction['image']['url']) && !empty($introduction['image']['alt'])) : ?>
            <img data-aos="fade-down" class="project-worker-img" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
            <?php endif; ?>
        </div>
    </section>

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