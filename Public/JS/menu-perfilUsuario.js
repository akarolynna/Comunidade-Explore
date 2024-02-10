//Declarando os botões

$("#btnDiarioViagem").click(exibirDiariosViagens);
$("#btnMinhasContribuicoes").click(exibirMinhasContribuicoes);
$("#btnMeusGuias").click(exibirMeusGuias);
$("#btnMeusEventos").click(exibirMeusEventos);
$("#btnSalvos").click(exibirSalvos);


// Criando as funções dos botões do menu

function exibirDiariosViagens(evt) {
    $("#containnerCards").empty();
    var btnAddDiarios = $('<button>').addClass('btnAddDiarioViagem').append($('<span>').addClass('spanAddDiario').text('Add Diario Viagem'));
    btnAddDiarios.click(redirecionandoAddDiarios);
    $("#containnerCards").prepend(btnAddDiarios);
}

function exibirMeusGuias() {
    $("#containnerCards").empty();
    var btnAddGuias = $('<button>').addClass('btnAddGuias').append($('<span>').addClass('spanAddDiario').text('Add Guia de Viagem'));
    btnAddGuias.click(redirecionarAddGuias);
    $("#containnerCards").prepend(btnAddGuias);
}


function exibirMeusEventos() {
    $("#containnerCards").empty();
    var btnAddEventos = $('<button>').addClass('btnAddEventos').append($('<span>').addClass('spanAddDiario').text('Add um Novo Evento'));
    btnAddEventos.click(redirecionarAddEvento);
    $("#containnerCards").prepend(btnAddEventos);
}

function exibirMinhasContribuicoes() {
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
function redirecionarAddEvento() {
    window.location.href = "./../View/cadastroEvento.php";
}
