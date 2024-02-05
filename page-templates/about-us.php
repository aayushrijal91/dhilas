<?php
/*
* Template Name: About Us
* The about us page
*/
get_header();
get_template_part('parts/section', 'nav');
?>

<main class="aboutuspage">
    <section class="banner">
        <img class="sky position-absolute h-100 w-100 object-fit-cover" src="<?= get_template_directory_uri() ?>/assets/images/background/banner_sky.jpg" alt="">
        <div class="gradient-overlay">
            <div class="bottom-0 position-absolute d-flex justify-content-center w-100">
                <img src="<?= get_template_directory_uri() ?>/assets/images/background/subcircle.png" alt="">
            </div>
            <img class="position-absolute bottom-0 w-full" src="<?= home_url() ?>/wp-content/uploads/2024/02/banner_cranes.png" alt="">

            <div class="inner">
                <div class="container">
                    <p class="fs-32 text-center text-uppercase">About Us</p>
                    <div class="col-xl-8 mx-auto py-3">
                        <h1 class="fs-85 lh-1 fw-700 text-center">Over 15 years<br /> serving Sydney wide</h1>
                    </div>

                    <div class="col-xl-3 mx-auto pt-3">
                        <div class="divider bg-primary"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container position-relative">
            <p class="fs-32 fw-500" data-aos="fade-up">Who We are</p>

            <p data-aos="fade-up" class="fs-65 text-uppercase lh-1 fw-800 text-tertiary pt-3"><span class="text-primary">Turning dream into reality,</span><br /> one project at a time</p>

            <div class="col-xl-4 py-4" data-aos="fade-up">
                <div class="divider bg-tertiary"></div>
            </div>

            <article class="col-lg-7 fs-18 text-tertiary lh-1_5" data-aos="fade-up">
                <p>
                    With a legacy of excellence and a passion for precision, we bring a wealth of experience to every project. Our team of skilled professionals is dedicated to realizing your vision, whether it's an intricate excavation or a controlled demolition. At Dhilas, we merge innovation with safety, creating a seamless blend of expertise that sets us apart. Our commitment to client satisfaction, sustainability, and superior results defines who we are – a name you can rely on for exceptional excavation and demolition services.
                </p>
            </article>

            <img data-aos="fade-down" class="project-worker-img" src="http://localhost/dhilas/wp-content/uploads/2024/02/turning-dream.png" alt="">
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