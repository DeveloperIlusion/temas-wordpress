const $ = jQuery;

function is_empty(str) {
    return (!str || str.trim() === '');
}

function get_file_extension(filename) {
    return filename.slice((filename.lastIndexOf('.') - 1 >>> 0) + 2);
}

$('#form-new-accordion-item').on('submit', function(e) {
    e.preventDefault();

    var allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    var file_extension = $('#thumbnail').val().split('.').pop().toLowerCase();

    if (!allowed_extensions.includes(file_extension)) {
        alert('Por favor, selecione um arquivo com uma extensão válida. Os tipos aceitos são: PNG, JPG, JPEG e GIF.');
        return;
    }

    let nonce = $('#nonce').val();
    let title = $('#title').val();
    let content = $('#content').val();
    let thumbnail = $('#thumbnail')[0].files[0];

    if (is_empty(nonce)) {
        return alert("Recarregue a página.");
    }
    if (is_empty(title)) {
        return alert("Insira o título.");
    }
    if (is_empty(content)) {
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
            $('#title').val('');
            $('#content').val('');
            $('#thumbnail').val('');
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
});
