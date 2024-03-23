<form method="post" id="form-new-accordion-item" enctype="multipart/form-data">
    <div class="row text-justify justify-content-center p-0 m-0">
        <div class="col-12 col-md-6">
            <h1 class="commom_title text-center">Add New Item</h1>
            <input type="hidden" id="action" name="action" value="submit_accordion">
            <input type="hidden" id="nonce" name="nonce" value="<?php echo wp_create_nonce('submit_accordion_nonce'); ?>">
            
            <div class="row mt-3">
                <label for="title" class="common_text_3 p-0 m-0">Question:</label><br>
                <input class="" placeholder="Type the question here" type="text" id="title" name="title" required>
            </div>

            <div class="row mt-3">
                <label for="content" class="common_text_3 p-0 m-0">Answer:</label><br>
                <textarea class="" placeholder="Type the answer here" id="content" name="content" required></textarea>
            </div>
            
            <div class="row mt-3">
                <label for="thumbnail" class="common_text_3 p-0 m-0">Image:</label><br>
                <input class="" type="file" id="thumbnail" name="thumbnail">
            </div>

            <div class="row justify-content-end mt-3">
                <button type="submit" id="btn-submit-form" class="btn personalized-button-2">Send F.A.Q +</button>
            </div>
        </div>
    </div>
</form>