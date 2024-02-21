$(document).ready(preencherDados);
$('#btnCancelar').click(cancelar);
$('#btnSalvarRascunho').click(salvarRascunho);
$('#btnPublicar').click(cadastrar);
$('#btnEditar').click(editar);
$('#btnEditarPublicar').click(editarPublicar);
$('#btnArquivar').click(arquivar);

function editarPublicar(evt) {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    const guiaId = searchParams.get('guiaId');

    const controllerURL = "../controller/GuiaController.class.php?_acao=editarPublicar&guiaId=" + guiaId;
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];

    formCadastro.find('.checkAreasContribuicao:checked').each(function () {
        areasContribuicao.push($(this).val());
    });
    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));

    evt.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: () => {
            alert('Guia editado e publicado com sucesso!');
            window.location.href = './pagina-inicial.php';
        },
        error: erroNaRequisicao
        });
}

function arquivar() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    const guiaId = searchParams.get('guiaId');

    const controllerURL = "../controller/GuiaController.class.php?_acao=arquivar&guiaId=" + guiaId;
    
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        success: () => {
            alert('Guia arquivado com sucesso!');
            window.location.href = './pagina-inicial.php';
        },
        error: erroNaRequisicao
    });
}

const formCadastro = $('#formCadGuia');

function preencherDados() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    let guiaId = searchParams.get('guiaId');

    $('#btnEditarPublicar').css('display', 'none');
    $('#btnArquivar').css('display', 'none');
    $('#btnEditar').css('display', 'none');

    if (guiaId != null) {
        $('.inputFotoContainer').css('display', 'none');
        $('.inputColaboradorContainer').css('display', 'none');
        $('.inputDesafioContainer').css('display', 'none');
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
    if (!$.isEmptyObject(response)) {
        if(response[0].publico == 0) {
            $('#btnEditarPublicar').css('display', 'block');
        } else if(response[0].publico == 1) {
            $('#btnArquivar').css('display', 'block');
        }

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

function cadastrar() {
    const controllerURL = "../Controller/GuiaController.class.php";
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];
    let desafios = [];
    let colaboradores = [];


    formCadastro.find('.checkAreasContribuicao:checked').each(function () {
        areasContribuicao.push($(this).val());
    });
    $(".desafio").each(function (index) {
        const tituloDesafio = $(this).find(".inputTituloDesafio").val();
        const descricaoDesafio = $(this).find(".inputDescricaoDesafio").val();

        desafios.push({
            titulo: tituloDesafio,
            descricao: descricaoDesafio
        });
    });

    $("#multiselectColaboradores option:selected").each(function () {
        colaboradores.push($(this).val());
    });

    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));
    dados.append('desafios', JSON.stringify(desafios));
    dados.append('colaboradores', JSON.stringify(colaboradores));

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

function editar(evt) {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    const guiaId = searchParams.get('guiaId');

    const controllerURL = "../controller/GuiaController.class.php?acao=editar&guiaId=" + guiaId;
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];
    let desafios = [];
    let colaboradores = [];

    formCadastro.find('.checkAreasContribuicao:checked').each(function () {
        areasContribuicao.push($(this).val());
    });

    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));

    evt.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: () => {
            alert('Guia editado com sucesso!');
            window.location.href = './pagina-inicial.php';
        },
        error: erroNaRequisicao
    });
}

function teste(evt) {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    const guiaId = searchParams.get('guiaId');

    const controllerURL = "../controller/GuiaController.class.php?_acao=editarPublicar&guiaId=" + guiaId;
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];
    let desafios = [];
    let colaboradores = [];

    formCadastro.find('.checkAreasContribuicao:checked').each(function () {
        areasContribuicao.push($(this).val());
    });
    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));

    console.log('aquii')
    evt.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: () => {
            alert('Guia editado e publicado com sucesso!');
            window.location.href = './pagina-inicial.php';
        },
        error: erroNaRequisicao
    });
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

    if (!$.isEmptyObject(response)) {
        response.forEach(item => {
            $(`#multiselectColaboradores option[value="${item.membroId}"]`).prop('selected', true);
        });
    }
}

function sucessoAoBuscarDesafios(response) {
    console.log(response);

    if (!$.isEmptyObject(response)) {
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
function sucessoAoPublicar(response) {
    console.log('SUCESSO!');
    console.log(response);
    history.back();
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

    formCadastro.find('.checkAreasContribuicao:checked').each(function () {
        areasContribuicao.push($(this).val());
    });

    $(".desafio").each(function (index) {
        const tituloDesafio = $(this).find(".inputTituloDesafio").val();
        const descricaoDesafio = $(this).find(".inputDescricaoDesafio").val();

        desafios.push({
            titulo: tituloDesafio,
            descricao: descricaoDesafio
        });
    });

    $("#multiselectColaboradores option:selected").each(function () {
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