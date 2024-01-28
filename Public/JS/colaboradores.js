$(document).ready(buscarMembros);

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
        $('#multiselectColaboradores').append(`<option value="${membro.id}">${membro.email}</option>`);
    });
} 

function erroNaRequisicao(error) {
    console.log('ERRO!');
    console.log(error);
}