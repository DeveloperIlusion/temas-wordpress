<?php 
/*

Template Name: Common Template

*/

?>

<?php get_header(); ?>
    <img 
        src="<?php header_image(); ?>" 
        height="<?= get_custom_header()->height; ?>"
        width="<?= get_custom_header()->width; ?>"
        alt=""
        class="img-fluid"
    >
    <div class="content-area">
        <main>
            <div class="commom-template">
                <section class="banner">
                    <div id="banner_image" class="justify-content-center align-items-center">
                    </div>
                    <hr class="divisor"/>
                </section>
            
                <section class="acordeon"></section>
                <section class="form"></section>
            </div>
        </main>
    </div>
<?php get_footer() ?>