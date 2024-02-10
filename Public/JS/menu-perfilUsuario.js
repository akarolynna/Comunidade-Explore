//Declarando os botões
$("#btnDiarioViagem").click(exibirDiariosViagens);
$("#btnMinhasContribuicoes").click(exibirMinhasContribuicoes);
$("#btnMeusGuias").click(exibirMeusGuias);
$("#btnMeusEventos").click(exibirMeusEventos);
$("#btnSalvos").click(exibirSalvos);

//Declarando as variaveis para o carregamento gradual dos cards
var fotosCarregadas = 0; // Contador para controlar o número de fotos já carregadas
var fotosPorCarregamento = 5; // Número de fotos a serem carregadas a cada vez
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

function criandoCards(data) {
  if (data.length > 0) {
    var totalDeFotos = data.length;
    var fotosRestantes = totalDeFotos - fotosCarregadas;
    var fotosParaCarregar = Math.min(fotosPorCarregamento, fotosRestantes);

    for (var i = fotosCarregadas; i < fotosCarregadas + fotosParaCarregar; i++) {
      var diario = data[i];
      var $card = $('<button>').addClass('card');
      $card.css('background-image', 'url(' + diario.foto + ')');

      var $titulo = $('<p>').addClass('cardTitulo').text(diario.titulo);
      $card.append($titulo);

      $('#containnerCards').append($card);
    }

    fotosCarregadas += fotosParaCarregar;

    // Se ainda houver fotos restantes, carregue mais ao rolar a página
    if (fotosCarregadas < totalDeFotos) {
      $(window).on('scroll', function () {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
          criandoCards(data); // Carrega mais fotos
        }
      });
    }
  }
}

function exibirMeusGuias() {
  btnAddGuias();
}

function exibirMeusEventos() {
  btnAddEventos();
}

function exibirMinhasContribuicoes() {
  $("#containnerCards").empty();
}

function exibirSalvos() {
  $("#containnerCards").empty();
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
  console.error('XHR:', xhr);
  console.error('Status:', status);
  console.error('Erro:', error);
}
