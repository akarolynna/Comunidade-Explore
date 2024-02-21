$(document).ready(buscarDiario);
$("#botaoAddPost").click(pegandoURL);
$("#botaoEditar").click(editarDiario);
let diarioId = 0;

//js de pegar detalhes diario viagem
function pegandoURL() {
  const queryString = window.location.search;
  const searchParams = new URLSearchParams(queryString);
  const diarioId = searchParams.get('diarioId');
  window.location.href = `/Comunidade-Explore/View/cadastroPost.php?diarioId=${diarioId}`;
}

function editarDiario() {
  const queryString = window.location.search;
  const searchParams = new URLSearchParams(queryString);
  const diarioId = searchParams.get('diarioId');
  window.location.href = `/Comunidade-Explore/View/edicaoDiario.php?diarioId=` + diarioId;
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

    $.ajax({
      url: `../Controller/PostController.class.php?diarioViagem=${diarioId}`,
      type: 'GET',
      dataType: 'JSON',
      success: sucessoAoBuscarPosts,
      error: erroNaRequisicao
    });
  } else {
    console.log('A resposta está vazia ou não contém os dados esperados.');
  }
}
function sucessoAoBuscarPosts(posts) {
  // Limpar o conteúdo existente antes de adicionar os novos posts
  $('.posts').empty();
  
  posts.forEach(post => {
    const fotos = JSON.parse(post.fotos);

     // Corrigido 'session' para 'section'
    const divPost = $('<div>').addClass('post');
    const divImagem = $('<div>').addClass('imagens');
    const divImagemFundo = $('<div>').addClass('imagem-fundo');
    const imagemFundo = $('<img>').attr('src', fotos[0]);
    divImagemFundo.append(imagemFundo);
    
    const divImagemFrente = $('<div>').addClass('imagem-frente');
    const imagemFrente = $('<img>').attr('src', fotos[1]);
    divImagemFrente.append(imagemFrente);

    divImagem.append(divImagemFundo, divImagemFrente);

    const divTextos = $('<div>').addClass('textos');
    const tituloPost = $('<h1>').addClass('tituloPost').text(post.titulo);
    const descricao = $('<p>').addClass('descricaoPost').text(post.descricao);
    divTextos.append(tituloPost, descricao);

    const botaoDeletar = $('<button>').addClass('btnDeletar').text('Deletar');
    // Associar a função deletarPost ao evento de clique do botão de deletar
    botaoDeletar.click(() => deletarPost(post.id));

    // Adicionar elementos ao post
    divTextos.append(botaoDeletar);

    divPost.append(divImagem, divTextos);
    $('#posts').append(divPost);

   
  });
}



function erroNaRequisicao(xhr, status, error) {
  console.error('ERRO!');
  console.log(xhr.responseText);
  console.error('XHR:', xhr);
  console.error('Status:', status);
  console.error('Erro:', error);
  console.log(data);
}

function deletarPost(postId) {
  alert('Tem certeza que deseja excluir esse POST? Todos os dados relacionados a ele serão perdidos');  
  $.ajax({
    url: '../Controller/PostController.class.php?postId=' + postId,
    type: 'DELETE',
    success: function(response) {
        window.location.reload();
    },
    error: erroNaRequisicao
});
}


