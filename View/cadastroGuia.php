<?php
    session_start();
    require_once '../Model/AreaContribuicao.enum.php';
    require_once '../Model/Categoria.enum.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href='../Public/CSS/Menu.css'>
    <link rel="stylesheet" href='../Public/CSS/CadastroGeral.css'>

</head>

<body class="pagina">
    <?php
        require_once './Componentes/menu.php';
    ?>

    <div class="blocoPrincipal">
        <h2 class="titulo">Crie um Guia de Viagem</h2>
        <form id="formCadGuia">
            <div class="inputContainer">
                <label class="label" for="inputNome">Nome do Destino</label>
                <input class="form-control" id="inputNome" name="nomeDestino" required>
            </div>
            <div class="inputGroup">
                <div class="inputContainer">
                    <label class="label" for="inputLocalizacao">Localização</label>
                    <input class="form-control" id="inputLocalizacao" name="localizacao" required>
                </div>
                <div class="inputContainer">
                    <label class="label" for="inputCorPrincipal">Cor principal</label>
                    <div class="inputGroup">
                        <input class="form-control" id="inputLocalizacao" value="#98C80B" readonly>
                        <input type="color" class="form-control form-control-color" id="inputCorPrincipal"
                            value="#98C80B" name="corPrincipal" required>
                    </div>
                </div>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputDescricao">Descrição</label>
                <textarea class="form-control" id="inputDescricao" name="descricao" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputClima">Clima</label>
                <textarea class="form-control" id="inputClima" name="clima" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputEpocaVisita">Melhor época para visitar</label>
                <textarea class="form-control" id="inputEpocaVisita" name="epocaVisita" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputCulturaHistoria">Cultura e História</label>
                <textarea class="form-control" id="inputCulturaHistoria" name="culturaHistoria" required></textarea>
            </div>

            <label class="label mt-4">Áreas de contribuição</label>
            <div class="inputGroup">
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkPontosTuristicos" value="<?php echo AreaContribuicao::PONTOS_TURISTICOS; ?>">
                        <label class="checkLabel" for="checkPontosTuristicos">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::PONTOS_TURISTICOS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkEventosFestivais" value="<?php echo AreaContribuicao::HOSPEDAGEM; ?>">
                        <label class="checkLabel" for="checkEventosFestivais">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::HOSPEDAGEM); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkRestaurantesCulinaria" value="<?php echo AreaContribuicao::RESTAURANTES; ?>">
                        <label class="checkLabel" for="checkRestaurantesCulinaria">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::RESTAURANTES); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkComprasMercado" value="<?php echo AreaContribuicao::FESTIVAIS; ?>">
                        <label class="checkLabel" for="checkComprasMercado">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::FESTIVAIS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkBemEstarRelaxamento" value="<?php echo AreaContribuicao::ENTRETENIMENTO; ?>">
                        <label class="checkLabel" for="checkBemEstarRelaxamento">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::ENTRETENIMENTO); ?>
                        </label>
                    </div>
                </div>
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkTransporte" value="<?php echo AreaContribuicao::TRANSPORTE; ?>">
                        <label class="checkLabel" for="checkTransporte">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::TRANSPORTE); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkDicas" value="<?php echo AreaContribuicao::RELAXAMENTO; ?>">
                        <label class="checkLabel" for="checkDicas">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::RELAXAMENTO); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkFamiliaCriancas" value="<?php echo AreaContribuicao::DICAS_LOCAIS; ?>">
                        <label class="checkLabel" for="checkFamiliaCriancas">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::DICAS_LOCAIS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkEsporteAventura" value="<?php echo AreaContribuicao::FAMILIA; ?>">
                        <label class="checkLabel" for="checkEsporteAventura">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::FAMILIA); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkArteEntretenimento" value="<?php echo AreaContribuicao::ESPORTES_AVENTURA; ?>">
                        <label class="checkLabel" for="checkArteEntretenimento">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::ESPORTES_AVENTURA); ?>
                        </label>
                    </div>
                </div>
            </div>

            <div class="accordion mt-4" id="painelDesafios">
                <div class="accordion-item desafio">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Desafio 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio1">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio1">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio1">Descrição</label>
                                <textarea class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item desafio">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Desafio 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio2">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio2">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio2">Descrição</label>
                                <textarea class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item desafio">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Desafio 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio3">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio3">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio3">Descrição</label>
                                <textarea class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <fieldset class="border p-2 mt-4 rounded">
                <legend>Fotos do destino</legend>
                <div class="inputContainer mt-5">
                    <label for="inputFotoCapa">Foto de capa</label>
                    <br>
                    <input type="file" class="form-control-file" id="inputFotoCapa" name="fotoCapa">
                </div>
                <div class="inputContainer mt-3">
                    <label>Outras fotos</label>
                    <br>
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria1" name="fotoSecundaria1">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria2" name="fotoSecundaria2">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria3" name="fotoSecundaria3">
                </div>
            </fieldset>

            <label class="label mt-3">Categorias</label>
            <select multiple class="form-control mt-2" id="multiselectCategorias">
                <option value="<?php echo Categoria::getValor(Categoria::PRAIA); ?>">
                    <?php echo Categoria::PRAIA; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::NEVE); ?>">
                    <?php echo Categoria::NEVE; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::URBANO); ?>">
                    <?php echo Categoria::URBANO; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::MONTANHA); ?>">
                    <?php echo Categoria::MONTANHA; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::NATUREZA); ?>">
                    <?php echo Categoria::NATUREZA; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::DESERTO); ?>">
                    <?php echo Categoria::DESERTO; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::HISTORIA); ?>">
                    <?php echo Categoria::HISTORIA; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::AVENTURA); ?>">
                    <?php echo Categoria::AVENTURA; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::MERGULHO); ?>">
                    <?php echo Categoria::MERGULHO; ?>
                </option>
                <option value="<?php echo Categoria::getValor(Categoria::ROMANCE); ?>">
                    <?php echo Categoria::ROMANCE; ?>
                </option>
                </option>
            </select>

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" id="checkColaboradores">
                <label class="checkLabel" for="checkColaboradores">
                    Colaboradores
                </label>
            </div>
            <select multiple class="form-control" id="multiselectColaboradores"></select>
        </form>

        <div class="d-flex justify-content-center mt-4 buttonContainer">
            <button class="btn btnTertiary" id="btnCancelar">Cancelar</button>
            <button class="btn btnSecundary mx-2" id="btnSalvarRascunho">Salvar rascunho</button>
            <button class="btn btnPrimary" id="btnPublicar">Publicar</button>
        </div>
    </div>
</body>

<script src="../Public/JS/cadastroGuia.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>