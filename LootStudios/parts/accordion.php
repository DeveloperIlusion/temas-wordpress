<div class="col-12 col-md-6 m-auto">
    <div class="accordion accordion-flush text-override-align" id="accordion-custom-for-loot-studios">
    <?php 
        $content = new WP_Query('post_type=accordion');
        if ($content->have_posts()):
            $count = 0;
            while($content->have_posts()):
                $content->the_post();
    ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button commom_title_2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $count ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $count ?>">
                            <?php the_title(); ?>
                        </button>
                    </h2>
                    <div id="flush-collapse-<?= $count ?>" class="accordion-collapse collapse" data-bs-parent="#accordion-custom-for-loot-studios">
                        <div class="accordion-body mt-0 pt-0">
                            <div class="row pt-2 common_text_3">
                                <?php the_content(); ?>
                            </div>
                            <div class="row justify-content-end p-0 m-0">
                                <button type="button" class="btn personalized-button-1" data-bs-toggle="modal" data-bs-target="#modal-<?= $count ?>">
                                    View More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade mt-5 mx-auto" id="modal-<?= $count ?>" tabindex="-1" aria-labelledby="modal-label-<?= $count ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-4">
                            <div class="modal-header m-0 p-0">
                                <div class="col-12 justify-content-center m-0 p-0">
                                    <div class="row p-0 m-0">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid', 'id' => 'modal-thumbnail')); ?>
                                    </div>
                                    <div class="row p-0 m-0 mt-4">
                                        <h1 class="modal-title commom_title_3 p-0 m-0" id="modal-label-<?= $count ?>"><?php the_title(); ?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body m-0 p-0 common_text_3">
                                <?php the_content(); ?>
                            </div>
                            <div class="modal-footer m-0 p-0">
                                <button type="button" class="btn personalized-button-1" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
    <?php 
                $count++;
            endwhile;
            wp_reset_postdata();
        else:
    ?>
            <div class="col-12 text-center">
                <h1 class="commom_title">No content found.</h1>
            </div>
    <?php
        endif;
    ?>
    </div>
</div>