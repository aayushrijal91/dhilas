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
        <?php $introduction = get_field('introduction'); ?>

        <?php if (!empty($introduction['introduction_text'])) : ?>
            <article class="fs-27 fw-600 text-tertiary text-center description pt-6 pb-4 py-lg-7">
                <p><?= $introduction['introduction_text'] ?></p>
            </article>
        <?php endif; ?>

        <div class="row gx-xl-5 py-6 gy-5">
            <div class="col-12 col-xl-8">
                <div class="row gy-5 gx-xl-5">
                    <?php if (!empty($introduction['cards_hero_title'])) : ?>
                        <div class="col-12">
                            <article class="bg-primary-light p-4 px-md-6 rounded-20 shadow">
                                <p class="col-xl-8 text-tertiary fs-35 fw-700">
                                    <?= $introduction['cards_hero_title'] ?>
                                </p>
                            </article>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="bg-primary rounded-20 shadow overflow-hidden">
                            <?php if (!empty($introduction['card_1_image']['url'])) : ?>
                                <img class="w-100 h-100 object-fit-cover" src="<?= $introduction['card_1_image']['url'] ?>" alt="<?= $introduction['card_1_image']['alt'] ?>">
                            <?php endif; ?>

                            <article class="p-4">
                                <?php if (!empty($introduction['card_1_title'])) : ?>
                                    <p class="fs-27 fw-700 text-tertiary text-capitalize text-end"><?= $introduction['card_1_title'] ?></p>
                                <?php endif; ?>

                                <?php if (!empty($introduction['card_1_description'])) : ?>
                                    <p class="text-white fs-20 fw-600 pt-3"><?= $introduction['card_1_description'] ?></p>
                                <?php endif; ?>
                            </article>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="bg-tertiary rounded-20 shadow overflow-hidden">
                            <article class="p-4 py-md-6">
                                <?php if (!empty($introduction['card_2_title'])) : ?>
                                    <p class="fs-27 fw-700 text-primary text-capitalize text-end"><?= $introduction['card_2_title'] ?></p>
                                <?php endif; ?>

                                <?php if (!empty($introduction['card_2_description'])) : ?>
                                    <p class="text-white fs-24 fw-600 pt-3 text-end"><?= $introduction['card_2_description'] ?></p>
                                <?php endif; ?>
                            </article>

                            <?php if (!empty($introduction['card_2_image']['url'])) : ?>
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['card_2_image']['url'] ?>" alt="<?= $introduction['card_2_image']['alt'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-12 col-xl-4">
                <div class="row gy-5">
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="row bg-primary rounded-20 shadow gx-0 overflow-hidden">
                            <?php if (!empty($introduction['card_3_image']['url'])) : ?>
                                <div class="col-12 col-lg-6">
                                    <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['card_3_image']['url'] ?>" alt="<?= $introduction['card_3_image']['alt'] ?>">
                                </div>
                            <?php endif; ?>

                            <div class="col-12 col-lg-6">
                                <article class="p-4">
                                    <?php if (!empty($introduction['card_3_description'])) : ?>
                                        <p class="text-tertiary fs-20 fw-700"><?= $introduction['card_3_description'] ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($introduction['card_3_title'])) : ?>
                                        <p class="fs-20 fw-700 text-white text-capitalize"><?= $introduction['card_3_title'] ?></p>
                                    <?php endif; ?>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="bg-gray shadow overflow-hidden rounded-20">
                            <?php if (!empty($introduction['card_4_image']['url'])) : ?>
                                <img class="w-100 h-100 object-fit-cover" src="<?= $introduction['card_4_image']['url'] ?>" alt="<?= $introduction['card_4_image']['alt'] ?>">
                            <?php endif; ?>

                            <article class="p-4 mx-auto col-xl-10">
                                <?php if (!empty($introduction['card_4_title'])) : ?>
                                    <p class="fs-27 fw-700 text-primary-dark text-capitalize text-center"><?= $introduction['card_4_title'] ?></p>
                                <?php endif; ?>

                                <?php if (!empty($introduction['card_4_description'])) : ?>
                                    <p class="fs-20 fw-700 pt-3 text-center">
                                        <?= $introduction['card_4_description'] ?>
                                    </p>
                                <?php endif; ?>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="fs-42 text-uppercase fw-900 text-tertiary">Our Project</p>
        <div class="col-md-6 col-lg-4 col-xl-2 py-2">
            <div class="divider bg-primary"></div>
        </div>
    </div>

    <div class="projects-slider pt-5 pb-7">
        <?php foreach (get_field('projects', 'options') as $project) : ?>
            <div class="project">
                <img class="position-absolute w-100 h-100 object-fit-cover top-0" src="<?= $project['url'] ?>" alt="<?= $project['alt'] ?>">

                <div class="overlay">
                    <div class="p-4 text-center">
                        <p class="text-tertiary fs-32 fw-900"><svg width="19" height="27" viewBox="0 0 19 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9489 13.3849C18.6524 12.0873 18.9927 10.6981 18.9998 9.23259H19C19.0021 8.28243 18.857 7.35289 18.5537 6.45069C17.8602 4.38727 16.5975 2.73112 14.735 1.51788C13.3528 0.617553 11.8203 0.133723 10.1619 0.0221787C9.44941 -0.0257824 8.73935 0.00452526 8.03252 0.108415C6.59468 0.319944 5.27615 0.824082 4.08757 1.63458C2.53203 2.69488 1.4031 4.08763 0.691276 5.79532C0.094083 7.22806 -0.117127 8.71533 0.0613535 10.2507C0.207911 11.5118 0.620013 12.6909 1.27089 13.7908C1.84911 14.7679 2.42996 15.7435 3.0108 16.7191C3.25677 17.1323 3.50274 17.5454 3.7485 17.9587L7.96465 25.049C8.06203 25.2127 8.15932 25.3766 8.2566 25.5404C8.4808 25.918 8.70502 26.2956 8.93057 26.6725C9.13275 27.0102 9.56033 27.1007 9.88327 26.8784C9.9935 26.8026 10.0578 26.6937 10.1226 26.5842C10.1273 26.5761 10.1321 26.568 10.1369 26.56C11.0773 24.978 12.018 23.3962 12.9587 21.8144C13.1861 21.4319 13.4136 21.0495 13.641 20.667C13.935 20.1728 14.2291 19.6786 14.5231 19.1844C15.293 17.8904 16.0629 16.5965 16.8313 15.3016C16.915 15.1606 16.9992 15.0198 17.0834 14.8791C17.3791 14.3848 17.6749 13.8904 17.9489 13.3849ZM9.51806 25.1301C9.51232 25.1383 9.50577 25.1478 9.4981 25.1591L9.49778 25.1593C9.48199 25.1328 9.46686 25.1074 9.45219 25.0828C9.41785 25.0253 9.38602 24.9719 9.35428 24.9185C8.98135 24.2912 8.60842 23.6639 8.2355 23.0366C7.2543 21.3861 6.27309 19.7356 5.29163 18.0852C4.92208 17.4638 4.55236 16.8425 4.18264 16.2212C3.58503 15.2169 2.98741 14.2126 2.39047 13.2079C1.79924 12.2131 1.43406 11.1454 1.31298 10.0028C1.19818 8.91889 1.31023 7.85453 1.65865 6.81907C2.29051 4.9414 3.46313 3.46163 5.18957 2.40867C6.34687 1.703 7.62155 1.33181 8.98458 1.2498C10.4848 1.1595 11.9093 1.44227 13.2499 2.10044C14.3566 2.64379 15.2749 3.41055 16.025 4.36493C16.8606 5.42835 17.397 6.62144 17.6202 7.94076C17.8786 9.46786 17.6763 10.9422 17.048 12.3638C16.8495 12.813 16.597 13.2337 16.3445 13.6543C16.296 13.7352 16.2474 13.8161 16.1993 13.8972C15.2696 15.4625 14.339 17.0273 13.4084 18.5921C13.018 19.2485 12.6276 19.9049 12.2372 20.5614C11.9964 20.9665 11.7555 21.3716 11.5146 21.7767C10.8571 22.8825 10.1996 23.9884 9.54195 25.0941C9.53534 25.1053 9.52789 25.116 9.51806 25.1301ZM9.57824 4.91044C7.0687 4.87044 5.06511 6.82654 5.06543 9.21006C5.07349 11.573 7.02082 13.4522 9.40217 13.5003C11.9056 13.5508 13.9188 11.6116 13.9342 9.23615C13.9495 6.85653 11.9894 4.94887 9.57824 4.91044ZM6.33688 9.20881C6.33318 7.54111 7.76151 6.1429 9.46247 6.14055C11.2083 6.12118 12.6616 7.50284 12.664 9.20585C12.6663 10.8718 11.2371 12.2594 9.53406 12.2715C7.80729 12.2836 6.34075 10.9214 6.33688 9.20881Z" fill="#1D3046" />
                            </svg> <?= $project['description'] ?></p>
                        <p class="text-tertiary text-center"><?= $project['caption'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
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