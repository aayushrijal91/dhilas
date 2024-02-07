<?php
/*
* Template Name: Services
* The services page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="servicespage">

    <section class="servicesList py-7">
        <div class="container">
            <div class="row justify-content-center gy-4">
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'orderby'        => 'publish_date',
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                            'value' => array('page-templates/inner-service.php'),
                        ),
                    )
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <div class="col-4">
                            <div class="service-card">
                                <?php $image_id = get_post_thumbnail_id(get_the_ID());
                                $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>

                                <img class="main-image" src="<?= the_post_thumbnail_url() ?>" alt="<?php echo $alt_text; ?>">

                                <div class="content">
                                    <div class="icon">
                                        <img src="<?= get_field('detail')['icon']['url'] ?>" alt="<?= get_field('detail')['icon']['alt'] ?>">
                                        <svg class="sus" xmlns="http://www.w3.org/2000/svg" width="65" height="28" viewBox="0 0 65 28" fill="none">
                                            <g filter="url(#filter0_i_1785_2679)">
                                                <path d="M64.3797 0.429811C61.5874 12.6882 51.2546 23.8828 36.6577 26.8005C20.7805 29.9816 6.88924 21.2893 0.810547 12.1918C3.04847 11.7359 5.22591 11.2496 7.42352 10.895C7.77634 10.8342 8.29046 11.2901 8.60296 11.6245C12.6756 15.9098 17.5143 18.939 23.3309 20.1445C35.1254 22.5962 45.0045 19.172 52.6861 9.96299C54.4401 7.86589 55.4482 5.15081 56.8293 2.73965C57.0611 2.32429 57.3535 1.71643 57.7063 1.63539C59.8938 1.15923 62.1015 0.824914 64.3797 0.419678V0.429811Z" fill="#178BCB" />
                                                <path d="M44.7676 15.2977C46.9905 12.0703 48.1263 8.42939 48.7961 4.6271C48.9514 3.75974 49.3008 3.33614 50.1648 3.2252C51.6985 3.02349 53.2225 2.73101 54.9116 2.44861C52.8537 8.04613 49.3882 12.1611 44.7676 15.2977Z" fill="#7CC5E5" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_i_1785_2679" x="-0.512344" y="-2.2261" width="64.8922" height="29.6964" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                    <feOffset dx="-1.32289" dy="-3.30723" />
                                                    <feGaussianBlur stdDeviation="1.32289" />
                                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1785_2679" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="fs-29 fw-800"><?= get_the_title() ?></p>
                                    <?php $des = substr(get_field('detail')['description'], 0, 110); ?>
                                    <article class="chronicle font-opensans fs-12 pt-2"><?= $des ?><em>... Read More</em></article>
                                    <a href="<?= get_the_permalink() ?>" class="permalink text-primary fs-12">Read More
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4596 5.95962C12.7135 5.70578 12.7135 5.29422 12.4596 5.04038L8.32304 0.903806C8.0692 0.649965 7.65765 0.649965 7.40381 0.903806C7.14997 1.15765 7.14997 1.5692 7.40381 1.82304L11.0808 5.5L7.40381 9.17696C7.14997 9.4308 7.14997 9.84235 7.40381 10.0962C7.65765 10.35 8.0692 10.35 8.32304 10.0962L12.4596 5.95962ZM0 6.15H12V4.85H0V6.15Z" fill="#7CC5E5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'quickquote'); ?>
    <?php get_template_part('parts/section', 'about'); ?>
    <?php get_template_part('parts/section', 'ournumbers'); ?>
    <?php get_template_part('parts/section', 'priority'); ?>
    <?php get_template_part('parts/section', 'quickquote'); ?>

    <div class="pt-7">
        <?php get_template_part('parts/section', 'testimonials'); ?>
    </div>

    <?php get_template_part('parts/section', 'ourclient'); ?>
    <?php get_template_part('parts/section', 'promotions'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>