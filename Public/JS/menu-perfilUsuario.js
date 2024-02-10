//Declarando os botões
$("#btnDiarioViagem").click(exibirDiariosViagens);
$("#btnMinhasContribuicoes").click(exibirMinhasContribuicoes);
$("#btnMeusDesafios").click(exibirMeusDesafios);
$("#btnMeusFavoritos").click(exibirMeusFavoritos);
$("#btnSalvos").click(exibirSalvos);


// Criando as funções dos botões do menu
function exibirDiariosViagens(evt) {
    $("#containnerCards").empty();
    var btnAddDiarios = $('<button>').addClass('btnAddDiarioViagem').append($('<span>').addClass('spanAddDiario').text('Add Diario Viagem'));
    btnAddDiarios.click(redirecionandoDiarios);
    $("#containnerCards").prepend(btnAddDiarios);


}


function exibirMinhasContribuicoes() {
    $("#containnerCards").empty();
}

function exibirMeusDesafios() {
    $("#containnerCards").empty();
}

function exibirMeusFavoritos() {
    $("#containnerCards").empty();
}
function exibirSalvos() {
    $("#containnerCards").empty();
}

// funções de redirecionamento
function redirecionandoDiarios() {
    window.location.href = "./../View/cadastroDiarioViagem.php";
}
