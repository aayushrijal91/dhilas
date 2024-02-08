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
    <section class="py-7 py-md-10">
        <div class="container position-relative">
            <p class="fs-32 fw-500" data-aos="fade-up">Who We are</p>

            <p data-aos="fade-up" class="fs-65 text-uppercase lh-1 fw-800 text-tertiary pt-3"><span class="text-primary">Turning dream into reality,</span><br /> one project at a time</p>

            <div class="col-md-5 col-lg-4 py-4" data-aos="fade-up">
                <div class="divider bg-tertiary"></div>
            </div>

            <article class="col-xl-7 fs-18 text-tertiary lh-1_5" data-aos="fade-up">
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