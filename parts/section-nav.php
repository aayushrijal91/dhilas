<section class="nav">
    <nav>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <a href="" class="">
                        <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['url'] ?>">
                    </a>
                </div>

                <div class="col-7">
                    <div class="row align-items-center gx-xl-5">
                        <div class="col-auto">
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

                        <div class="col-auto">
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

                        <div class="col">
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
        </div>
    </nav>

    <div class="container">
        <?php wp_nav_menu(array(
            'menu' => 'Primary Menu',
            'item_class' => 'nav-item py-3',
            'link_class' => 'text-uppercase text-primary fw-600 fs-12',
            'menu_class' => 'd-flex flex-wrap gap-4'
        )); ?>
    </div>
</section>