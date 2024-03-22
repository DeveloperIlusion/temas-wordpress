<form method="post" id="form-new-accordion-item" class="" enctype="multipart/form-data">
    <div class="row text-justify justify-content-center p-0 m-0">
        <div class="col-12 col-md-6">
            <input type="hidden" id="action" name="action" value="submit_accordion">
            <input type="hidden" id="nonce" name="nonce" value="<?php echo wp_create_nonce('submit_accordion_nonce'); ?>">
            
            <div class="row">
                <label for="title" class="common_text">Título:</label><br>
                <input class="" type="text" id="title" name="title" required>
            </div>

            <div class="row">
                <label for="content" class="common_text">Conteúdo:</label><br>
                <textarea class="" id="content" name="content" required></textarea>
            </div>
            
            <div class="row">
                <label for="thumbnail" class="common_text">Thumbnail:</label><br>
                <input class="" type="file" id="thumbnail" name="thumbnail">
            </div>

            <div class="row justify-content-end mt-3">
                <button type="button" id="btn-submit-form" class="btn personalized-button-1">New Item</button>
            </div>
        </div>
    </div>
</form>