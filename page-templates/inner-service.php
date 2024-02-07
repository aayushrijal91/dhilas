<?php
/*
* Template Name: Inner Service
* The inner service page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="innerservicePage">
    <div class="container">
        <article class="fs-27 fw-600 text-tertiary text-center description py-7">
            <p>Demolition is not merely about bringing structures down; it's a symphony of precision, safety, and expertise. When it comes to choosing a partner for demolition services, one name stands out amidst the crowd: Dhilas Excavation & Demolition. With a track record that echoes excellence and a commitment to innovation, Dhilas is your ultimate choice for transforming spaces with a touch of mastery.</p>
        </article>

        <div class="row">
            <div class="col-8">
                <div class="row g-5">
                    <div class="col-12">
                        <article class="bg-primary-light py-4 px-6 rounded-20 shadow">
                            <p class="col-lg-7 text-tertiary fs-35 fw-700">
                                Why choose Dhilas for your Demolition needs?
                            </p>
                        </article>
                    </div>

                    <div class="col-5">
                        <div class="bg-primary rounded-20 shadow">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row g-5">
                    <div class="bg-primary rounded-20 shadow">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/section', 'quickquote'); ?>

    <div class="pt-7">
        <?php get_template_part('parts/section', 'services'); ?>
    </div>

    <?php get_template_part('parts/section', 'ournumbers'); ?>
    <?php get_template_part('parts/section', 'priority'); ?>

    <div class="pt-7">
        <?php get_template_part('parts/section', 'testimonials'); ?>
    </div>

    <?php get_template_part('parts/section', 'ourclient'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>