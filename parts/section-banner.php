<?php $banner = get_field('banner'); ?>
<section class="banner">
    <?php if (!empty(get_field('banner')['background']['url'])) : ?>
        <img class="sky position-absolute h-100 w-100 object-fit-cover" src="<?= get_field('banner')['background']['url'] ?>" alt="">
    <?php endif; ?>

    <div class="gradient-overlay">
        <?php if (empty(get_field('banner')['background']['url'])) : ?>
            <div class="bottom-0 position-absolute d-flex justify-content-center w-100">
                <img src="<?= get_template_directory_uri() ?>/assets/images/background/subcircle.png" alt="">
            </div>
            <img class="position-absolute bottom-0 w-full" src="<?= home_url() ?>/wp-content/uploads/2024/02/banner_cranes.png" alt="">
        <?php endif; ?>

        <div class="inner" data-aos="fade-up">
            <div class="container">
                <p class="fs-32 text-center text-uppercase"><?= !empty($banner['headline']) ? $banner['headline'] : the_title() ?></p>
                <div class="py-3">
                    <?php if (!empty($banner["title"])) : ?>
                        <h1 class="fs-85 lh-1 fw-700 text-center"><?= $banner['title'] ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($banner["subtitle"])) : ?>
                        <p class="fs-42 fw-800 text-center"><?= $banner["subtitle"] ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-md-5 col-lg-4 col-xl-3 mx-auto pt-3">
                    <div class="divider bg-primary"></div>
                </div>
            </div>
        </div>
    </div>
</section>