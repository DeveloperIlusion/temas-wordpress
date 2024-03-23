<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Teste da Loot Studios</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="social-media-icons"></div>
                        <div class="search"></div>
                    </div>
                </div>
                <section class="menu-area">]
                    <div class="container">
                        <div class="row">
                            <section class="logo col-md-2 col-12 text-center"></section>
                            <nav class="header-menu col-md-10 text-end"><?php wp_nav_menu(array('theme_location' => 'top_menu')); ?></nav>
                        </div>
                    </div>
                </section>
            </section>
        </header>