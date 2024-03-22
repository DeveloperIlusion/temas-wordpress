const $ = jQuery;

function isEmpty(str) {
    return (!str || str.trim() === '');
}

$('#form-new-accordion-item').on('submit', function(e) {
    e.preventDefault();

    let nonce = $('#nonce').val();
    let title = $('#title').val();
    let content = $('#content').val();
    let thumbnail = $('#thumbnail')[0].files[0];

    if (isEmpty(nonce)) {
        return alert("Recarregue a página.");
    }
    if (isEmpty(title)) {
        return alert("Insira o título.");
    }
    if (isEmpty(content)) {
        return alert("Insira o texto do conteúdo.");
    }
    if (!thumbnail) {
        return alert("Selecione uma imagem.");
    }

    var formData = new FormData(this);
    formData.append('action', 'submit_accordion');
    

    $.ajax({
        type: 'POST',
        url: ajax_params.ajax_url,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $('#accordion-section').html(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
});
