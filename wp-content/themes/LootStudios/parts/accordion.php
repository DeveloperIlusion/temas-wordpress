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
                        <button class="accordion-button common_tex collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $count ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $count ?>">
                            <?php the_title(); ?>
                        </button>
                    </h2>
                    <div id="flush-collapse-<?= $count ?>" class="accordion-collapse collapse" data-bs-parent="#accordion-custom-for-loot-studios">
                        <div class="accordion-body">
                            <p class="common_text">
                                <?php the_content(); ?>
                            </p>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal-<?= $count ?>">
                                View More
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade mt-5 mx-auto" id="modal-<?= $count ?>" tabindex="-1" aria-labelledby="modal-label-<?= $count ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header p-0 m-0">
                                <div class="col-12 justify-content-center m-0 p-0">
                                    <div class="row p-0 m-0">
                                        <div id="overlay-gradient"></div>
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'id' => 'modal-thumbnail')); ?>
                                    </div>
                                    <div class="row p-3">
                                        <h1 class="modal-title fs-5" id="modal-label-<?= $count ?>"><?php the_title(); ?></h1>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-body">
                            <p class="common_text">
                                <?php the_content(); ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
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
            <div class="col-12 col-md-6 m-auto">
                <h1 class="commom_title">Nenhum conteúdo encontrado.</h1>
            </div>
    <?php
        endif;
    ?>
    </div>
</div>