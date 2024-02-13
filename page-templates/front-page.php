<?php
/*
* Template Name: Home
* The Home page
*/
get_header();
get_template_part('parts/section', 'nav');
?>

<main class="homepage">
    <section class="homepage-banner">
        <?php $banner = get_field('banner'); ?>
        <div class="container pt-md-16 py-10 py-xl-16">
            <?php if (!empty($banner['subtitle'])) : ?>
                <p class="text-white fs-35 text-uppercase fw-700 text-center"><?= $banner['subtitle'] ?></p>
            <?php endif; ?>

            <?php if (!empty($banner['title'])) : ?>
                <h1 class="text-capitalize fw-700 fs-85 text-center text-primary"><?= $banner['title'] ?></h1>
            <?php endif; ?>

            <div class="col-md-5 col-lg-4 col-xl-2 mx-auto py-4 py-md-5">
                <div class="divider bg-white"></div>
            </div>
            <div class="col-xl-7 mx-auto">
                <article class="text-white text-center fs-20 description">
                    With our modern equipment fleet and highly skilled employees, we complete even the most challenging demolitions excavation projects on time.
                </article>
            </div>
        </div>

        <?php if (!empty(get_field('banner_service_slider'))) : ?>
            <div class="container pb-5">
                <div class="bannerServiceSlider">
                    <?php foreach (get_field('banner_service_slider') as $index => $service) : ?>
                        <div class="<?= $index == 0 ? 'bg-primary text-center text-secondary' : '' ?> p-4">
                            <img src="<?= $service['url'] ?>" alt="<?= $service['alt'] ?>">

                            <p><?= $service['description'] ?></p>
                        </div>
                    <?php endforeach; ?>

                    <!-- <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/02/asbestos-removal.png" alt="">

                    <p>Asbestos Removal</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/02/excavation.png" alt="">

                    <p>Excavation</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/02/traffic-control.png" alt="">

                    <p>Traffic control</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/02/strip-outs.png" alt="">

                    <p>Strip Outs</p>
                </div> -->
                </div>
            </div>
        <?php endif; ?>
    </section>

    <section class="business-needs">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-12 col-lg-6">
                    <p class="text-uppercase text-primary fs-65 fw-800 lh-1">For <span class="text-tertiary">Over</span></p>
                    <p class="fs-125 text-uppercase fw-800 text-primary lh-1">15 Years</p>
                    <p class="text-tertiary fs-24 fw-800">we've been helping with any of</p>
                    <p class="text-tertiary fs-48 fw-800 lh-1">your business<br /> needs.</p>
                </div>

                <div class="col-12 col-lg-6 col-xl-5">
                    <p class="text-end fs-24 fw-600 text-black">We have been the company of <span class="fw-800">choice of</span></p>

                    <div class="row g-3 pt-4">
                        <div class="col-6">
                            <div class="cta-text cta-before-primary border border-tertiary bg-tertiary text-white rounded-pill fs-24 fw-700 text-center lh-1 p-3">Excavation</div>
                        </div>

                        <div class="col-6">
                            <div class="cta-text border border-tertiary bg-primary text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 p-3">Demolition</div>
                        </div>

                        <div class="col-12">
                            <div class="cta-text border border-primary bg-grey text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 p-3">Complete Site Development Projects</div>
                        </div>

                        <div class="col-12">
                            <div class="cta-text border border-tertiary bg-white text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 p-3">Sydney Wide</div>
                        </div>
                    </div>
                </div>
            </div>
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