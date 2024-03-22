<article <?php post_class('col-12 text-justify'); ?>>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('thumb'); ?>
    <p>Publicado em <?= get_the_date(); ?> por <?php the_author_link(); ?></p>
    <p>Categorias: <?php the_category(' - '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <?php the_content(); ?>
</article>