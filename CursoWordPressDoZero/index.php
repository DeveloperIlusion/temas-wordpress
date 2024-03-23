<?php get_header() ?>
    <div class="content-area">
        <main>
            <section class="banner">
                <div id="banner_image" class="justify-content-center align-items-center">
                    <div class="text-center col-12 col-md-6 col-lg-6">
                        <h1 class="commom_title">F.A.Q.</h1>
                        <p class="common_text">
                            Welcome to our FAQ page! Below are answers to some of the most commonly
                            asked questions about our products and services.
                        </p>
                    </div>
                </div>
                <hr class="divisor"/>
            </section>

            <div class="container my-5">
                <section class="services">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="service-item">
                                <?php 
                                    if (is_active_sidebar('services-one')) {
                                        dynamic_sidebar('services-one');
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-item">
                                <?php 
                                    if (is_active_sidebar('services-two')) {
                                        dynamic_sidebar('services-two');
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="service-item">
                                <?php 
                                    if (is_active_sidebar('services-three')) {
                                        dynamic_sidebar('services-three');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="blog">
                    <div class="row">
                        <div class="col-md-3">
                            <?php get_sidebar("primary"); ?>
                        </div>

                        <div class="col-md-9">
                            <?php if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                    echo get_template_part('parts/post-list', get_post_format());
                                endwhile;
                                else:
                                    echo "Não há nenhum post.";
                                endif;
                            ?>
                        </div>
                    </div>
                </section>

                <section class="form"></section>
            </div>
        </main>
    </div>
<?php get_footer() ?>