$('#btnCancelar').click(cancelar);
$('#btnPublicar').click(publicar);

function cancelar() {
    history.back();
}

function publicar(evt) {
    const formCadastro = $('#formCadDirio');
    const controllerURL = "../Controller/DiarioController.class.php";
    const dados = new FormData($(formCadastro)[0]);

    evt.preventDefault();

    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: sucessoAoPublicar,
        error: erroNaRequisicao
    });
}

function sucessoAoPublicar(response) {
    console.log('SUCESSO!');
    console.log(response);
    if (response.success) {
        alert("Inserção feita com sucesso");
        // Limpa os campos do formulário
        $('#formCadDirio')[0].reset();
        history.back(); //volta ao local onde estávamos anteriormente
    } else {
        alert("Falha ao inserir diário");
    }
}

function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.error(xhr);
    console.error(status);
    console.error(error);
}
