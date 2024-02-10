//Declarando os botões
$("#btnDiarioViagem").click(exibirDiariosViagens);
$("#btnMinhasContribuicoes").click(exibirMinhasContribuicoes);
$("#btnMeusGuias").click(exibirMeusGuias);
$("#btnMeusFavoritos").click(exibirMeusFavoritos);
$("#btnSalvos").click(exibirSalvos);


// Criando as funções dos botões do menu
function exibirDiariosViagens(evt) {
    $("#containnerCards").empty();
    var btnAddDiarios = $('<button>').addClass('btnAddDiarioViagem').append($('<span>').addClass('spanAddDiario').text('Add Diario Viagem'));
    btnAddDiarios.click(redirecionandoAddDiarios);
    $("#containnerCards").prepend(btnAddDiarios);
    //Adicionar agora partes dos cards do BD
}

function exibirMeusGuias() {
    $("#containnerCards").empty();

    var btnAddGuias = $('<button>').addClass('btnAddGuias').append($('<span>').addClass('spanAddDiario').text('Add Guia de Viagem'));
    btnAddGuias.click(redirecionarAddGuias);
    $("#containnerCards").prepend(btnAddGuias);
}


function exibirMinhasContribuicoes() {
    $("#containnerCards").empty();
}



function exibirMeusFavoritos() {
    $("#containnerCards").empty();
}
function exibirSalvos() {
    $("#containnerCards").empty();
}

// funções de redirecionamento
function redirecionandoAddDiarios() {
    window.location.href = "./../View/cadastroDiarioViagem.php";
}
function redirecionarAddGuias() {
    window.location.href = "./../View/cadastroGuia.php";
}
