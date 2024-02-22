<section class="priority py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 position-relative order-2 order-md-1" data-aos="fade-right">
                <img src="<?= get_field('priority', 'options')['image']['url'] ?>" alt="<?= get_field('priority', 'options')['image']['alt'] ?>">
            </div>

            <div class="col-lg-6 py-md-5 order-1 order-md-2 " data-aos="fade-left">
                <?php if (!empty(get_field('priority', 'options')['subtitle'])) : ?>
                    <p class="text-uppercase fw-800 lh-1 text-black fs-45"><?= get_field('priority', 'options')['subtitle'] ?></p>
                <?php endif; ?>

                <p class="text-uppercase fw-800 lh-1 text-primary fs-90"><?= get_field('priority', 'options')['title'] ?></p>

                <div class="col-6 ms-xl-n4 py-4 py-md-5">
                    <div class="divider bg-black"></div>
                </div>

                <article class="fs-20 description">
                    <?= get_field('priority', 'options')['description'] ?>
                </article>
            </div>
        </div>
    </div>
</section>