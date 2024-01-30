<div class="post">
    <div class="imagemPost">
        <img src="../Public/Imagens/CategoriaPraia.jpg" alt="Imagem do Post">
    </div>
    <div class="conteudoPost">
        <div class="cabecalhoPost">
            <div class="criadorPost">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="Foto do autor">
                <p>Anna Carolina</p>
            </div>
            <p>20 out 2023</p>
        </div>
        <h3 class="tituloPost mt-3">Título do Diario de Viagem</h3>
        <p class="mt-3 descricaoPost">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, laudantium iste similique non animi rerum maiores saepe. Tempora veritatis rerum, delectus dignissimos illum, eum quo sint perferendis ea veniam natus.
        </p>
        <div class="teste">
            <i class="corCinzaClaro cursorPointer far fa-heart fa-lg"></i>
            <p class="corCinzaClaro ml-2 mr-4">152</p>
            <i class="corCinzaClaro cursorPointer far fa-comment fa-lg"></i>
            <p class="corCinzaClaro ml-2 mr-4">152</p>
            <i class="corCinzaClaro cursorPointer far fa-bookmark fa-lg"></i>
        </div>
    </div>
</div>

<div class="post">
    <div class="imagemPost">
        <img src="${post.imagens}" alt="Imagem do Post">
    </div>
    <div class="conteudoPost">
        <div class="cabecalhoPost">
            <div class="criadorPost">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="Foto do autor">
                <p>O nome do criador!!!!!</p>
            </div>
            <p>${post.data}</p>
        </div>
        <h3 class="tituloPost mt-3">Título do Diario de Viagem!!!!!</h3>
        <p class="mt-3 descricaoPost">${post.conteudo}</p>
        <div class="teste">
            <i class="corCinzaClaro cursorPointer far fa-heart fa-lg"></i>
            <p class="corCinzaClaro ml-2 mr-4">${post.numCurtidas}</p>
            <i class="corCinzaClaro cursorPointer far fa-comment fa-lg"></i>
            <p class="corCinzaClaro ml-2 mr-4">${post.numComentarios}</p>
            <i class="corCinzaClaro cursorPointer far fa-bookmark fa-lg"></i>
        </div>
    </div>
</div>