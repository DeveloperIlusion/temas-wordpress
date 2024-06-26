<?php get_header() ?>
    <div class="content-area">
        <main>
            <section id="banner-section" class="mb-0">
                <?= get_template_part('parts/banner', get_post_format()); ?>
            </section>

            <section id="accordion-section" class="mt-0">
                <?= get_template_part('parts/accordion', get_post_format()); ?>
            </section>

            <section id="form-accordion-section" class="mt-5 pt-0 mb-5">
                <?= get_template_part('parts/form-accordion', get_post_format()); ?>
            </section>
        </main>
    </div>
<?php get_footer() ?>