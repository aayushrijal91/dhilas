<section class="services mb-n5">
    <div class="container">
        <p class="fs-95 fw-800 text-center text-primary">What We Do</p>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto py-4">
            <div class="divider bg-black"></div>
        </div>

        <div class="row justify-content-center gy-4 gx-xl-5 pt-5">
            <?php
            if (have_rows('services', 'options')) :
                while (have_rows('services', 'options')) : the_row();
            ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="service-card">
                            <p class="text-uppercase fs-32 py-3 px-4 fw-900"><?= !empty(get_sub_field('image')['description']) ? get_sub_field('image')['description'] : get_sub_field('link')['title'] ?></p>
                            <img class="image" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                            <div class="p-4">
                                <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>" class="text-black fw-500">Read more
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none">
                                        <path d="M12.9783 10.3208L17.8154 5.33628L12.9783 0.351806L12.1653 1.18961L15.6146 4.74391L0.596346 4.74391L0.596346 5.92872L15.6144 5.92872L12.1653 9.48295L12.9783 10.3208Z" fill="black" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>