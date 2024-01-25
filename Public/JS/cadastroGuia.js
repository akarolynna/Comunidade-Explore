$(document).ready(buscarMembros);
$('#btnCancelar').click(cancelar);
$('#btnSalvarRascunho').click(salvarRascunho);

const formCadastro = $('#formCadGuia');


function buscarMembros() {
    $.ajax({
        url: `../Controller/MembroController.class.php`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarMembros,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarMembros(response) {
    response.forEach((membro) => {
        $('#multiselectColaboradores').append(`<option value="${membro.id}">${membro.nome}</option>`);
    });
} 

function cancelar() {
    history.back()
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
    console.log(response.responseText);
}

function erroNaRequisicao(error) {
    console.log('ERRO!');
    console.log(error);
}