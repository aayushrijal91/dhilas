<?php
get_header();
get_template_part('parts/section', 'nav');
?>
<section class="pt-16 pb-10">
    <div class="container">
        <article class=" text-center fs-20">
            <?= the_content() ?>
        </article>
    </div>
</section>
<?php get_footer(); ?>