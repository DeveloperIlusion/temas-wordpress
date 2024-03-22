<article <?php post_class('col-12 col-md-6 text-center'); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Publicado em <?= get_the_date(); ?> por <?php the_author_link(); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <?php the_content(); ?>
</article>