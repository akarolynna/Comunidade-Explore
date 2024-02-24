$(document).ready(preencherCampos);
$('#btnCancelar').click(cancelar);
$('#btnPublicar').click(publicar);
$('#btnEditar').click(editar);

let eventoId = 0;

function preencherCampos() {
    var queryString = window.location.search;
    var searchParams = new URLSearchParams(queryString);
    var eventoId = searchParams.get('eventoId');

    $('#btnEditar').css('display', 'none');

    if (eventoId != null) {
        $('.inputfotoContainer').css('display', 'none');
        $('.inputColaboradoresContainer').css('display', 'none');
        $('#btnPublicar').css('display', 'none');
        $('#btnEditar').css('display', 'inline');

        $.ajax({
            url: `../Controller/EventoController.class.php?eventoId=${eventoId}`,
            type: 'GET',
            dataType: 'JSON',
            success: sucessoAoBuscarEvento,
            error: erroNaRequisicao
        });
    }
}

function sucessoAoBuscarEvento(response) {
    if (!$.isEmptyObject(response)) {
        eventoId = response[0].id;

        $('#inputTitulo').val(response[0].titulo);
        $('#inputLocalizacao').val(response[0].localizacao);
        $('#inputDataInicio').val(response[0].dataInicio);
        $('.inputHoraInicio').val(response[0].horaInicio.slice(0, 5));
        $('#inputDataTermino').val(response[0].dataTermino);
        $('.inputHoraTermino').val(response[0].horaTermino.slice(0, 5));
        $('#selectCategoria').val(response[0].categoriaId);
        $('#inputMaxParticipantes').val(response[0].maxParticipantes);
        $('#inputFotoCapaEdicao').val(response[0].fotoCapa);

        preencherColaboradores(response[0].id);

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse evento.')
    }
}

function preencherColaboradores(eventoId) {
    $.ajax({
        url: `../Controller/EventoController.class.php?eventoId=${eventoId}&_acao=buscarColaboradores`,
        type: 'GET',
        dataType: 'JSON',
        success: (response) => {
            if (!$.isEmptyObject(response)) {
                response.forEach(item => {
                    $(`#multiselectColaboradores option[value="${item.membroId}"]`).prop('selected', true);
                });
            }
        },
        error: erroNaRequisicao
    });
}

function cancelar() {
    history.back();
}

function publicar(evt) {
    const formCadastro = $('#formCadEvento');
    const controllerURL = "../controller/EventoController.class.php";
    const dados = new FormData($(formCadastro)[0]);
    let colaboradores = [];

    $("#multiselectColaboradores option:selected").each(function () {
        colaboradores.push($(this).val());
    });

    dados.append('colaboradores', JSON.stringify(colaboradores));

    evt.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: sucessoAoSalvar,
        error: erroNaRequisicao
    });
}

function sucessoAoSalvar(response) {
    console.log('SUCESSO!');
    console.log(response);
    history.back();
}

function editar(evt) {
    const formCadastro = $('#formCadEvento');
    const controllerURL = "../controller/EventoController.class.php?_acao=editar&eventoId=" + eventoId;
    const dados = new FormData($(formCadastro)[0]);
    let colaboradores = [];

    $("#multiselectColaboradores option:selected").each(function () {
        colaboradores.push($(this).val());
    });

    dados.append('colaboradores', JSON.stringify(colaboradores));

    evt.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: sucessoAoSalvar,
        error: (error) => {
            alert('Nenhuma alteração encontrada');
            console.log(error);
        }
    });
}

function erroNaRequisicao(error) {
    console.log('ERRO!');
    console.log(error);
    console.log(error.responseText);
}