<section class="bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center justify-content-md-around align-items-center gy-5">
            <div class="col-12 col-md-8 col-lg-7 col-xl-5">
                <p class="text-center fs-24 fw-700 text-uppercase text-black"><?= get_field('quick_quote', 'options')['text'] ?></p>
            </div>
            <?php if (isset(get_field('quick_quote', 'options')['button'])) : ?>
                <div class="col-8 col-md-4">
                    <a href="<?= get_field('quick_quote', 'options')['button']['url'] ?>" class="btn btn-tertiary rounded-0 text-white fs-24 fw-700"><?= get_field('quick_quote', 'options')['button']['title'] ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>