<section class="our-numbers">
    <div class="container">
        <div class="row justify-content-around justify-content-xl-between gy-4">
            <?php
            if (have_rows('numbers', 'options')) :
                while (have_rows('numbers', 'options')) : the_row(); ?>
                    <div class="col-6 col-md-auto text-center d-flex flex-column justify-content-between">
                        <div>
                            <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">
                        </div>
                        <div>
                            <p class="fs-52 text-primary fw-700 pt-3"><?= get_sub_field('number'); ?></p>
                            <p class="fs-29 text-white"><?= get_sub_field('title') ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>