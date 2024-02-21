$('#cadastrarPost').click(cadastrarPost);
$('#btnCancelar').click(cancelar);

function cadastrarPost(diarioId) {
    const formCadastroPost = $('#formCadastroPost');
    const dados = new FormData($(formCadastroPost)[0]);
    console.log('Enviando requisição:', dados);

    $.ajax({
        url: `../Controller/PostController.class.php?diarioId=${diarioId}`,
        type: 'POST',
        dataType: 'JSON',
        data: dados,
        processData: false,
        contentType: false,
        success: sucessoAoPublicar,
        error: erroNaRequisicao
    });
}

$('#cadastrarPost').click(function (event) {
    event.preventDefault(); // Evita o envio padrão do formulário
    const queryString = window.location.search;
    const searchParams = new URLSearchParams(queryString);
    const diarioId = searchParams.get('diarioId');
    cadastrarPost(diarioId);
});

function sucessoAoPublicar(response) {
    console.log('SUCESSO!');
    console.log(response);
    alert('cadastrado com sucesso');
    history.back();
}

function cancelar() {
    history.back();
}

function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.error(xhr);
    console.error(status);
    console.error(error);
    console.log('Resposta:', xhr.responseText);
}
