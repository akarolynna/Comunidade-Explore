$('#btnCancelar').click(cancelar);
$('#btnPublicar').click(publicar);

function cancelar() {
    history.back();
}

function publicar(evt) {
    const formCadastro = $('#formCadEvento');
    const controllerURL = "../controller/EventoController.class.php"; 
    const dados = new FormData($(formCadastro)[0]);
    let colaboradores = [];
    
    $("#multiselectColaboradores option:selected").each(function() {
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
        success: sucessoAoPublicar,
        error: erroNaRequisicao
    }); 
}

function sucessoAoPublicar(response) {
    console.log('SUCESSO!');
    console.log(response);
    // history.back();
}

function erroNaRequisicao(error) {
    console.log('ERRO!');
    console.log(error);
}