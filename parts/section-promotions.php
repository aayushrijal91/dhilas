<section class="promotions py-7">
    <div class="container">
        <p class="fs-95 fw-800 text-center text-primary lh-1"><?= get_field('promotion', 'options')['title'] ?></p>
        <?php if (!empty(get_field('promotion', 'options')['subtitle'])) : ?>
            <p class="fs-35 text-tertiary text-center fw-500 py-3"><?= get_field('promotion', 'options')['subtitle'] ?></p>
        <?php endif; ?>

        <div class="col-md-6 col-lg-4 col-xl-2 mx-auto py-4">
            <div class="divider bg-black"></div>
        </div>

        <div class="row gy-4">
            <?php foreach (get_field('promotion', 'option')['promotions'] as $image) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">

                        <div class="overlay">
                            <p class="text-capitalize text-white lh-1 highlight-primary"><?= $image['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row justify-content-end pt-7 pt-lg-11">
            <div class="col-xl-6 col-xxl-7">
                <p class="text-uppercase fs-45 fw-800 lh-1 text-tertiary"><?= get_field('promotion', 'options')['subtitle_2'] ?></p>
                <p class="text-uppercase fs-95 fw-800 lh-1 text-primary"><?= get_field('promotion', 'options')['title_2'] ?></p>

                <div class="col-md-5 col-lg-4 col-xl-5 py-5">
                    <div class="divider bg-tertiary"></div>
                </div>

                <article class="fs-24 text-tertiary description font-opensans">
                    <?= get_field('promotion', 'options')['description'] ?>
                </article>
            </div>
        </div>
    </div>
</section>