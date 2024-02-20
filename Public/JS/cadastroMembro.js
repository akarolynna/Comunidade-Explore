$("#cadastrarMembro").click(cadastrarMembro);

function cadastrarMembro(evt) {
    evt.preventDefault();

    // Verifica se todos os campos obrigatórios foram preenchidos
    if (camposEstaoPreenchidos()) {
        const formCadastro = $('#formularioMembro');
        const controllerURL = "../Controller/MembroController.class.php?_acao=cadastro";
        const dados = new FormData($(formCadastro)[0]);

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
    } else {
        alert("Por favor, preencha todos os campos obrigatórios.");
    }
}

function camposEstaoPreenchidos() {
    // Verifica se os campos obrigatórios têm algum valor
    const foto = $('#foto').val();
    const nome = $('#nome').val();
    const email = $('#email').val();
    const senha = $('#senha').val();

    return foto && nome && email && senha;
}

function sucessoAoPublicar(response) {

    if (response.success) {
        alert("Inserção feita com sucesso");
        // Limpa os campos do formulário
        $('#formularioMembro')[0].reset();
        window.location.href = "../View/login.php";
    } else {
        alert("Falha ao inserir Membro");
    }
}

function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.error(xhr);
    console.error(status);
    console.error(error);
}
