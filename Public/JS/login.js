// $("#login").click(realizarLogin);

// function realizarLogin(evt) {
//     evt.preventDefault();
//     if (camposEstaoPreenchidos()) {
//         const formLogin = $('#formularioMembro');
//         const controllerURL = "../Controller/MembroController.class.php?_acao=login";
//         const dados = new FormData($(formLogin)[0]);

//         $.ajax({
//             type: "POST",
//             dataType: "JSON",
//             url: controllerURL,
//             data: dados,
//             processData: false,
//             contentType: false,
          
//             error: erroNaRequisicao
//         });
//     } else {
//         alert("Por favor, preencha todos os campos obrigatórios.");
//     }
// }


// function camposEstaoPreenchidos() {
//     const email = $('#email').val();
//     const senha = $('#senha').val();
//     return email && senha;
// }


// function erroNaRequisicao(xhr, status, error) {
//     console.error('ERRO!');
//     console.error(xhr);
//     console.error(status);
//     console.error(error);
// }
