<section class="nav">
    <nav>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 col-md-auto">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['url'] ?>">
                    </a>
                </div>

                <div class="col-auto d-md-none">
                    <button id="showSlidingMenu" type="button" class="btn p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </div>

                <div class="col-7 d-none d-md-block">
                    <div class="row align-items-center gx-xl-5">
                        <div class="col-auto d-none d-md-block">
                            <div class="row align-items-center">
                                <div class="col-auto border-primary border-end">
                                    <img src="<?= home_url() ?>/wp-content/uploads/2024/02/clock.png" alt="">
                                </div>
                                <div class="col-auto">
                                    <p class="text-primary fs-12">Hours of Operation</p>
                                    <p class="text-white fs-12"><?= get_field('general', 'options')['operating_hours'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto d-none d-md-block">
                            <div class="row align-items-center">
                                <div class="col-auto border-primary border-end">
                                    <img src="<?= home_url() ?>/wp-content/uploads/2024/02/phone.png" alt="">
                                </div>
                                <div class="col-auto">
                                    <p class="text-primary fs-12">Hours of Operation</p>
                                    <p class="text-white fs-12"><?= get_field('general', 'options')['phone_number'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-md-none d-lg-block">
                            <div class="row align-items-center justify-content-center gx-2 pb-2">
                                <div class="col-auto">
                                    <p class="text-uppercase text-primary fs-12 fw-800">Follow us</p>
                                </div>

                                <?php
                                if (have_rows('socials', 'options')) :
                                    while (have_rows('socials', 'options')) : the_row();
                                ?>
                                        <div class="col-auto">
                                            <a href="<?= get_sub_field('link')['url'] ?>" target="_blank">
                                                <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['url'] ?>">
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>

                            <?php if (!empty(get_field('general', 'options')['book_quote']['url']) && !empty(get_field('general', 'options')['book_quote']['title'])) : ?>
                                <a href="<?= get_field('general', 'options')['book_quote']['url'] ?>" class="btn btn-primary text-tertiary rounded-0 w-100 fw-800"><?= get_field('general', 'options')['book_quote']['title'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container d-none d-md-block">
        <?php wp_nav_menu(array(
            'menu' => 'Primary Menu',
            'item_class' => 'nav-item py-3',
            'link_class' => 'text-uppercase text-primary fw-600 fs-12',
            'menu_class' => 'd-flex flex-wrap gap-4'
        )); ?>
    </div>
</section>

<div id="slidingMenu">
    <div class="container">
        <div class="row align-items-center justify-content-between py-2">
            <div class="col-5 col-md-auto">
                <a href="<?= home_url() ?>" class="">
                    <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['url'] ?>">
                </a>
            </div>

            <div class="col-auto d-md-none">
                <button id="closeSlidingMenu" type="button" class="btn p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="">
            <?php wp_nav_menu(array(
                'menu' => 'Primary Menu',
                'item_class' => 'nav-item py-2',
                'link_class' => 'text-uppercase text-primary fw-600 fs-20',
                'menu_class' => 'py-6'
            )); ?>
        </div>


        <div class="row align-items-center gx-xl-5">
            <div class="col-auto d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-auto border-primary border-end">
                        <img src="<?= home_url() ?>/wp-content/uploads/2024/02/clock.png" alt="">
                    </div>
                    <div class="col-auto">
                        <p class="text-primary fs-12">Hours of Operation</p>
                        <p class="text-white fs-12">7:00am - 4:00pm</p>
                    </div>
                </div>
            </div>

            <div class="col-auto d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-auto border-primary border-end">
                        <img src="<?= home_url() ?>/wp-content/uploads/2024/02/phone.png" alt="">
                    </div>
                    <div class="col-auto">
                        <p class="text-primary fs-12">Hours of Operation</p>
                        <p class="text-white fs-12"><?= get_field('general', 'options')['phone_number'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col d-md-none d-lg-block">
                <div class="row align-items-center justify-content-center gx-2 pb-2">
                    <div class="col-auto">
                        <p class="text-uppercase text-primary fs-12 fw-800">Follow us</p>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/facebook.png" alt="">
                        </a>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/twitter.png" alt="">
                        </a>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/instagram.png" alt="">
                        </a>
                    </div>
                </div>
                <a href="" class="btn btn-primary text-tertiary rounded-0 w-100 fw-800">Book A Quote</a>
            </div>
        </div>
    </div>
</div>