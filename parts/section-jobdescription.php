<section class="jobs-description py-6">
    <div class="container">
        <p class="fs-95 fw-800 text-center text-primary lh-1">Jobs</p>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto py-4">
            <div class="divider bg-black"></div>
        </div>

        <div class="jobs-slider py-5">
            <?php if (have_rows('jobs', 'options')) :
                while (have_rows('jobs', 'options')) : the_row();
            ?>
                    <div>
                        <p class="title"><?= get_sub_field('job_group'); ?></p>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>

        <div class="jobs-description-slider">
            <?php if (have_rows('jobs', 'options')) :
                while (have_rows('jobs', 'options')) : the_row();
            ?>
                    <div>
                        <div class="row g-4">
                            <?php foreach (get_sub_field('gallery') as $image) : ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="job-card">
                                        <div class="overlay p-4">
                                            <p class="fs-27 text-primary fw-700"><?= $image['caption'] ?></p>
                                            <p class="fs-20 text-white fw-500"><?= $image['description'] ?></p>
                                        </div>
                                        <img class="image" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</section>