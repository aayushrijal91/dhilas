<section class="our-client py-7">
    <div class="container">
        <p class="fs-95 fw-800 text-center text-primary lh-1">Our Clients</p>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto py-4">
            <div class="divider bg-white"></div>
        </div>

        <div class="row pt-4 pt-md-5 gy-4">
            <?php foreach (get_field('clients', 'options') as $index => $client) : ?>
                <div class="col-6 col-md-3" data-aos="<?= ($index % 4 == 0 || $index % 4 == 1) ? 'fade-right' : 'fade-left' ?>">
                    <div class="bg-white h-100 d-flex justify-content-center align-items-center p-2">
                        <img src="<?= $client['url'] ?>" alt="<?= $client['alt'] ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>