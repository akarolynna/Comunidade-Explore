function publicar(evt) {
    evt.preventDefault();

    const formCadastro = $('#formCadDirio');
    const controllerURL = "../Controller/DiarioController.class.php";
    const dados = new FormData($(formCadastro)[0]);

    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.trim() === "Inserção feita com sucesso") {
                window.location.href = 'pagina-de-sucesso.php';
            } else {
                alert("Falha ao inserir diário");
            }
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

$(document).ready(function () {
    $('#btnPublicar').click(publicar);
});
