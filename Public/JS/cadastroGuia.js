$(document).ready(preencherDados);
$('#btnCancelar').click(cancelar);
$('#btnSalvarRascunho').click(salvarRascunho);
$('#btnEditar').click(editar);

const formCadastro = $('#formCadGuia');

function editar(evt) {  
    const controllerURL = "../controller/GuiaController.class.php?acao=editar"; 
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
        success: sucessoAoEditar,
        error: erroNaRequisicao
    });  
}

function sucessoAoEditar(response) {
    console.log(response);
}

function preencherDados() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    let guiaId = searchParams.get('guiaId');
    
    if(guiaId != null) {    
        $('#btnSalvarRascunho').css('display', 'none');
        $('#btnPublicar').css('display', 'none');
        $('#btnEditar').css('display', 'block');

        $.ajax({
            url: `../Controller/GuiaController.class.php?guiaId=${guiaId}`,
            type: 'GET',
            dataType: 'JSON',
            success: sucessoAoBuscarGuia,
            error: erroNaRequisicao
        });
    }

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

        buscarDesafios(response[0].id);
        buscarColaboradores(response[0].id);

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse guia.')
    }    
}

function buscarDesafios(guiaId) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}&acao=buscarDesafios`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarDesafios,
        error: erroNaRequisicao
    });
}

function buscarColaboradores(guiaId) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}&acao=buscarColaboradores`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarColaboradores,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarColaboradores(response) {
    console.log(response);

    if(!$.isEmptyObject(response)) {
        response.forEach(item => {
            $(`#multiselectColaboradores option[value="${item.membroId}"]`).prop('selected', true);
        });
    }
}

function sucessoAoBuscarDesafios(response) {
    console.log(response);

    if(!$.isEmptyObject(response)) {
        $('#inputTituloDesafio1').val(response[0].titulo);
        $('#inputDescricaoDesafio1').val(response[0].descricao);
        $('#inputTituloDesafio2').val(response[1].titulo);
        $('#inputDescricaoDesafio2').val(response[1].descricao);
        $('#inputTituloDesafio3').val(response[2].titulo);
        $('#inputDescricaoDesafio3').val(response[2].descricao);

    } else {
        $('#painelDesafios').html('Erro ao buscar os desafios desse guia');
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