$(document).ready(buscarDiario);
$("#botaoAddPost").click(pegandoURL)
let diarioId = 0;

//js de pegar detalhes diario viagem
function pegandoURL() {
  const queryString = window.location.search;
  const searchParams = new URLSearchParams(queryString);
  const diarioId = searchParams.get('diarioId');
  window.location.href = `/Comunidade-Explore/View/cadastroPost.php?diarioId=${diarioId}`;
  }

function buscarDiario() {
  const queryString = window.location.search;
  const searchParams = new URLSearchParams(queryString);
  diarioId = searchParams.get('diarioId');

  $.ajax({
    url: `../Controller/DiarioController.class.php?diarioId=${diarioId}`,
    type: 'GET',
    dataType: 'JSON',
    success: sucessoAoBuscarDiario,
    error: erroNaRequisicao
  });
  }

  function sucessoAoBuscarDiario(dados) {
    console.log(dados);
    if (!$.isEmptyObject(dados)) {
      $('#nomeDestino').html(`${dados[0].titulo}`);
      $('#localizacao').html(`Localização: ${dados[0].localizacao}`);
      $('.secaoCapa').css('background-image', `url("${dados[0].foto}")`);

      //Depois tenho que adicionar os filhos (POSTS) dos diarios
    } else {
      console.log('A resposta está vazia ou não contém os dados esperados.');
    }
  }

  function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.log(xhr.responseText);
    console.error('XHR:', xhr);
    console.error('Status:', status);
    console.error('Erro:', error);
    console.log(data);
  }

