<article <?php post_class('col-12 col-md-6 text-center'); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Categorias: <?php the_category(' - '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <?php the_content(); ?>
</article>