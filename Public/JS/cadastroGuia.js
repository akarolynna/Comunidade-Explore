$(document).ready(preencherDados);
$('#btnCancelar').click(cancelar);
$('#btnSalvarRascunho').click(salvarRascunho);

const formCadastro = $('#formCadGuia');

function preencherDados() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    guiaId = searchParams.get('guiaId');

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
        $('#inputNome').val(response[0].nomeDestino);
        $('#inputLocalizacao').val(response[0].localizacao);
        $('#inputCorPrincipal').val(response[0].corPrincipal);
        $('#inputDescricao').val(response[0].descricao);
        $('#inputClima').val(response[0].clima);
        $('#inputEpocaVisita').val(response[0].epocaVisita);
        $('#inputCulturaHistoria').val(response[0].culturaHistoria);
        $('#selectCategoria').val(response[0].categoriaId);

        $('#inputHiddenFotoCapa').val(response[0].fotoCapa)
        let i = 0;
        JSON.parse(response[0].fotosSecundarias).forEach(foto => {
            i++;
            $(`#inputHiddenFotoSecundaria${i}`).val(foto);
        });

        i = 0;
        const areasString = response[0].areasContribuicao.replace(/\\/g, '');
        const areasStringSemAspas = areasString.replace(/^"|"$/g, '');
        const areas = JSON.parse(areasStringSemAspas);       
        areas.forEach(areaContribuicao => {
            i++;
            $(`#check${areaContribuicao}`).prop('checked', true);
        });

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse guia.')
    }    
}

function cancelar() {
    history.back();
}

function salvarRascunho(evt) {  
    const controllerURL = "../controller/GuiaController.class.php"; 
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];
    let desafios = [];
    let colaboradores = [];

    formCadastro.find('.checkAreasContribuicao:checked').each(function() {
        areasContribuicao.push($(this).val());
    });

    $(".desafio").each(function(index) {
        const tituloDesafio = $(this).find(".inputTituloDesafio").val();
        const descricaoDesafio = $(this).find(".inputDescricaoDesafio").val();

        desafios.push({
            titulo: tituloDesafio,
            descricao: descricaoDesafio
        });
    });

    $("#multiselectColaboradores option:selected").each(function() {
        colaboradores.push($(this).val());
    });

    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));
    dados.append('desafios', JSON.stringify(desafios));
    dados.append('colaboradores', JSON.stringify(colaboradores));

    evt.preventDefault();   
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false, 
        contentType: false,
        success: sucessoAoSalvarRascunho,
        error: erroNaRequisicao
    });  
}

function sucessoAoSalvarRascunho(response) {
    console.log('SUCESSO!');
    console.log(response);
    history.back();
}

function erroNaRequisicao(error) {
    console.log('ERRO!');
    console.log(error);
}