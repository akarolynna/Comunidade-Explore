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

    if(!$.isEmptyObject(response)) {
        $('#nomeDestino').html(response[0].nomeDestino);
        $('#localizacao').html(response[0].localizacao);
        $('#secaoCapa').css('background-image', `url("${response[0].fotoCapa}")`);
        $('#sobreTitulo').html(`Sobre ${response[0].nomeDestino}`);
        $('#descricao').html(`Sobre ${response[0].descricao}`);
        $('#clima').html(`Sobre ${response[0].clima}`);
        $('#epocaVisita').html(`Sobre ${response[0].epocaVisita}`);
        $('#culturaHistoria').html(`Sobre ${response[0].culturaHistoria}`);

        const fotos = JSON.parse(response[0].fotosSecundarias);
        let i = 0;
        fotos.forEach(foto => {
            i++;
            $(`#foto${i}`).attr("src", foto);
        });

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse guia.')
    }    
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
    console.log(error.responseText);
}

"SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'descricao' at row 1"