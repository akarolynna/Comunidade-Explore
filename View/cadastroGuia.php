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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../Public/CSS/Modal/modalCriarDiario.css">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/menu2.css">
    <link rel="stylesheet" href='../Public/CSS/CadastroGeral.css'>

</head>

<body class="pagina">
    <?php require_once './Componentes/menu2.php'; ?>

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
                        <!-- <input class="form-control" id="inputCorPrincipal" value="#98C80B" readonly> -->
                        <input type="color" class="form-control form-control-color" id="inputCorPrincipal" value="#98C80B" name="corPrincipal" required>
                    </div>
                </div>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputDescricao">Descrição</label>
                <textarea maxlength="1000" class="form-control" id="inputDescricao" name="descricao" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputClima">Clima</label>
                <textarea maxlength="1000" class="form-control" id="inputClima" name="clima" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputEpocaVisita">Melhor época para visitar</label>
                <textarea maxlength="1000" class="form-control" id="inputEpocaVisita" name="epocaVisita" required></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputCulturaHistoria">Cultura e História</label>
                <textarea maxlength="1000" class="form-control" id="inputCulturaHistoria" name="culturaHistoria" required></textarea>
            </div>

            <label class="label mt-4">Áreas de contribuição</label>
            <div class="inputGroup">
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkPONTOS_TURISTICOS" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::PONTOS_TURISTICOS); ?>">
                        <label class="checkLabel" for="checkPONTOS_TURISTICOS">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::PONTOS_TURISTICOS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkHOSPEDAGEM" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::HOSPEDAGEM); ?>">
                        <label class="checkLabel" for="checkHOSPEDAGEM">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::HOSPEDAGEM); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkRESTAURANTES" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::RESTAURANTES); ?>">
                        <label class="checkLabel" for="checkRESTAURANTES">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::RESTAURANTES); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkFESTIVAIS" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::FESTIVAIS); ?>">
                        <label class="checkLabel" for="checkComprasMercado">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::FESTIVAIS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkENTRETENIMENTO" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::ENTRETENIMENTO); ?>">
                        <label class="checkLabel" for="checkENTRETENIMENTO">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::ENTRETENIMENTO); ?>
                        </label>
                    </div>
                </div>
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkTRANSPORTE" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::TRANSPORTE); ?>">
                        <label class="checkLabel" for="checkTRANSPORTE">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::TRANSPORTE); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkRELAXAMENTO" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::RELAXAMENTO); ?>">
                        <label class="checkLabel" for="checkRELAXAMENTO">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::RELAXAMENTO); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkDICAS_LOCAIS" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::DICAS_LOCAIS); ?>">
                        <label class="checkLabel" for="checkDICAS_LOCAIS">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::DICAS_LOCAIS); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkFAMILIA" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::FAMILIA); ?>">
                        <label class="checkLabel" for="checkFAMILIA">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::FAMILIA); ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkAreasContribuicao" type="checkbox" id="checkESPORTES_AVENTURA" value="<?php echo AreaContribuicao::getValue(AreaContribuicao::ESPORTES_AVENTURA); ?>">
                        <label class="checkLabel" for="checkESPORTES_AVENTURA">
                            <?php echo AreaContribuicao::getNome(AreaContribuicao::ESPORTES_AVENTURA); ?>
                        </label>
                    </div>
                </div>
            </div>

            <div class="accordion mt-4 inputDesafioContainer" id="painelDesafios">
                <div class="accordion-item desafio">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Desafio 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio1">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio1">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio1">Descrição</label>
                                <textarea maxlength="1000" class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio1"></textarea>
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
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio2">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio2">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio2">Descrição</label>
                                <textarea maxlength="1000" class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio2"></textarea>
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
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#painelDesafios">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio3">Título</label>
                                <input class="form-control inputTituloDesafio" id="inputTituloDesafio3">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio3">Descrição</label>
                                <textarea maxlength="1000" class="form-control inputDescricaoDesafio" id="inputDescricaoDesafio3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <fieldset class="border p-2 mt-4 rounded inputFotoContainer">
                <legend>Fotos do destino</legend>
                <div class="inputContainer mt-5">
                    <label for="inputFotoCapa">Foto de capa</label>
                    <br>
                    <input type="file" class="form-control-file" id="inputFotoCapa" name="fotoCapa">
                    <input type="hidden" id="inputHiddenFotoCapa" name="fotoCapaEdicao">
                </div>
                <div class="inputContainer mt-3">
                    <label>Outras fotos</label>
                    <br>
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria1" name="fotoSecundaria1">
                    <input type="hidden" id="inputHiddenFotoSecundaria1" name="fotoSecundaria1Edicao">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria2" name="fotoSecundaria2">
                    <input type="hidden" id="inputHiddenFotoSecundaria2" name="fotoSecundaria2Edicao">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria3" name="fotoSecundaria3">
                    <input type="hidden" id="inputHiddenFotoSecundaria3" name="fotoSecundaria3Edicao">
                </div>
            </fieldset>

            <label class="label mt-3">Categoria</label>
            <select class="form-select mt-2" id="selectCategoria" name="categoria">
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

            <div class="form-check mt-4 inputColaboradorContainer">
                <label class="checkLabel" for="checkColaboradores">
                    Colaboradores
                </label>
            </div>
            <select multiple class="form-control inputColaboradorContainer" id="multiselectColaboradores"></select>
        </form>

        <div class="d-flex justify-content-center mt-4 buttonContainer">
            <button class="btn btnTertiary" id="btnCancelar">Cancelar</button>
            <button class="btn btnSecundary mx-2" id="btnSalvarRascunho">Salvar rascunho</button>
            <button class="btn btnPrimary" id="btnPublicar">Publicar</button>
            <button class="btn btnPrimary" id="btnEditar">Editar</button>
        </div>
    </div>
    <div class="modalDiarioViagem" id="modalEditarUsuario"></div>
    <div id="overlay" class="overlay"></div>
</body>

<script src="../Public/JS/cadastroGuia.js"></script>
<script src="../Public/JS/colaboradores.js"></script>
<script src="../Public/JS/opcoesDiario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>