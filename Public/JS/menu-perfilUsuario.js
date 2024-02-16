//Declarando os botões
$("#btnDiarioViagem").click(exibirDiariosViagens);
$("#btnMinhasContribuicoes").click(exibirMinhasContribuicoes);
$("#btnMeusGuias").click(exibirMeusGuias);
$("#btnMeusEventos").click(exibirMeusEventos);
$("#btnSalvos").click(exibirSalvos);


//Requisições AJAX
function exibirDiariosViagens() {
  addbtnAddDiario();

  $.ajax({
    type: "GET",
    dataType: "json",
    url: '../Controller/DiarioController.class.php',
    success: criandoCards,
    error: erroNaRequisicao
  });
}

function exibirMeusGuias() {
  btnAddGuias();
  $.ajax({
    type: "GET",
    dataType: "json",
    data: {
      acao: 'exibirGuiasUsuario'
    },
    url: "../Controller/GuiaController.class.php",
    success: criandoCardsGuia,
    error: erroNaRequisicao
  });
}


function exibirMeusEventos() {
  btnAddEventos();
  $.ajax({
    type: "GET",
    dataType: "json",
    url: '../Controller/EventoController.class.php',
    success: criandoCardsEvento,
    error: erroNaRequisicao
  });
}


function exibirMinhasContribuicoes() {
  $("#containnerCards").empty();
}

function exibirSalvos() {
  $("#containnerCards").empty();
}




//Adicionando Cards
function criandoCards(data) {
  if (data.length > 0) {
    $.each(data, function (index, diario) {
      var $card = $('<div>').addClass('card');
      $card.css('background-image', 'url(' + diario.foto + ')');

      var $titulo = $('<p>').addClass('cardTitulo').text(diario.titulo);
      $card.append($titulo);

      $('#containnerCards').append($card);
    });
  }
}

function criandoCardsGuia(data) {
  console.log("Dados recebidos:", data);

  if (data.length > 0) {
    $.each(data, function (index, guia) {
      var $card = $('<div>').addClass('card');
      $card.css("background-image", `url('${guia.fotoCapa}')`);
      var $titulo = $('<p>').addClass('cardTituloGuia').text(guia.nomeDestino);
      $card.append($titulo);
      var $iconeLocalizacao = $('<img>').attr('src', '../Public/Imagens/icons8-location-48.png').addClass('iconeCalendario');
      var $textoLocalizacao = $('<p>').addClass('textoTag').text(guia.localizacao);
      var $divRodape = $('<div>').addClass('tag');
      $divRodape.append($iconeLocalizacao);
      $divRodape.append($textoLocalizacao);
      $card.append($divRodape);
      $('#containnerCards').append($card);
    });
  }
}

function criandoCardsEvento(data) {
  console.log("Dados recebidos:", data);
  if (data && data.length > 0) {
    $.each(data, function (index, evento) {
      var $card = $('<div>').addClass('cardEvento');
      $card.css('background-image', `url('${evento.fotoCapa}')`);

      var $titulo = $('<p>').addClass('cardTituloEventos').text(evento.titulo);
      $card.append($titulo);

      var $iconeCalendario = $('<img>').attr('src', '../Public/Imagens/calendario.png').addClass('iconeCalendario');
      var $dataInicio = $('<p>').addClass('textoTag').text(evento.dataInicio);
      var $divRodape = $('<div>').addClass('tag');
      $divRodape.append($iconeCalendario);
      $divRodape.append($dataInicio);
      $card.append($divRodape);

      $('#containnerCards').append($card);
    });
  } else {
    console.warn("Nenhum dado de evento recebido.");
  }
}



// funções de botões para adicionar elementos
function addbtnAddDiario() {
  $("#containnerCards").empty();
  var btnAddDiarios = $("<button>")
    .addClass("btnAddDiarioViagem")
    .append($("<span>").addClass("spanAddDiario").text("Add Diario Viagem"));
  btnAddDiarios.click(redirecionandoAddDiarios);
  $("#containnerCards").prepend(btnAddDiarios);
}

function btnAddGuias() {
  $("#containnerCards").empty();
  var btnAddGuias = $("<button>")
    .addClass("btnAddGuias")
    .append($("<span>").addClass("spanAddDiario").text("Add Guia de Viagem"));
  btnAddGuias.click(redirecionarAddGuias);
  $("#containnerCards").prepend(btnAddGuias);
}

function btnAddEventos() {
  $("#containnerCards").empty();
  var btnAddEventos = $("<button>")
    .addClass("btnAddEventos")
    .append($("<span>").addClass("spanAddDiario").text("Add um Novo Evento"));
  btnAddEventos.click(redirecionarAddEvento);
  $("#containnerCards").prepend(btnAddEventos);
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


//Funções de sucesso chamadas pelo AJAX

// function criandoCards(data) {
//   alert('entrou')
//   if (data.length > 0) {
//     $.each(data, function(index, diario) {
//       var $card = $('<div>').addClass('card');
//       $card.css('background-image', 'url(' + diario.foto + ')');

//       var $titulo = $('<p>').addClass('cardTitulo').text(diario.titulo);
//       $card.append($titulo);

//       $('#containnerCards').append($card);
//     });
//   }
// }

// Erro na Requisição
function erroNaRequisicao(xhr, status, error) {
  console.error('ERRO!');
  console.log(xhr.responseText);
  console.error('XHR:', xhr);
  console.error('Status:', status);
  console.error('Erro:', error);
  console.log(data);
}

