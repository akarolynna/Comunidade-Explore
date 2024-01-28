$(document).ready(buscarGuia);

function buscarGuia() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    let guiaId = searchParams.get('guiaId');
    
    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarGuia,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarGuia(response) {
    console.log(response);
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
    console.log(error.responseText);
}