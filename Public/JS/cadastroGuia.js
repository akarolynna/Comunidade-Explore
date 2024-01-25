$(document).ready(buscarMembros);

const formCadastro = $('#formCadGuia').on('submit', cadastrarGuia);


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

function cadastrarGuia(evt) {  
    const controllerURL = "../controller/ContatoController.class.php";
    const dados = new FormData($(formCadastro)[0]);
    let areasContribuicao = [];
    let desafios = [];
    let fotosSecundarias = [];
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
    
    $(".inputFotoSecundaria").each(function(index) {
        if (this.files.length > 0) {
            fotosSecundarias.push(this.files[0]);
        }
    });
    
    $("#multiselectColaboradores option:selected").each(function() {
        colaboradores.push($(this).val());
    });

    dados.append('areasContribuicao', JSON.stringify(areasContribuicao));
    dados.append('desafios', JSON.stringify(desafios));
    dados.append('fotosSecundarias', JSON.stringify(fotosSecundarias));
    dados.append('colaboradores', JSON.stringify(colaboradores));
    
    evt.preventDefault();   
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false, 
        contentType: false,
        success: sucessoAoCadastrar,
        error: erroNaRequisicao
    });  
}

function sucessoAoCadastrar(response) {
    console.log(response);
}

function erroNaRequisicao(error) {
    console.log(error);
}