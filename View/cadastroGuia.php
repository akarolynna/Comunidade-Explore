<?php
session_start();
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
                <input class="form-control" id="inputNome" required>
            </div>
            <div class="inputGroup">
                <div class="inputContainer">
                    <label class="label" for="inputLocalizacao">Localização</label>
                    <input class="form-control" id="inputLocalizacao">
                </div>
                <div class="inputContainer">
                    <label class="label" for="inputCorPrincipal">Cor principal</label>
                    <div class="inputGroup">
                        <input class="form-control" id="inputLocalizacao" value="#98C80B" readonly>
                        <input type="color" class="form-control form-control-color" id="inputCorPrincipal"
                            value="#98C80B">
                    </div>
                </div>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputDescricao">Descrição</label>
                <textarea class="form-control" id="inputDescricao"></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputDescricao">Clima</label>
                <textarea class="form-control" id="inputDescricao"></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputEpocaVisita">Melhor época para visitar</label>
                <textarea class="form-control" id="inputEpocaVisita"></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputCulturaHistoria">Cultura e História</label>
                <textarea class="form-control" id="inputCulturaHistoria"></textarea>
            </div>

            <label class="label mt-4">Áreas de contribuição</label>
            <div class="inputGroup">
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkPontosTuristicos">
                        <label class="checkLabel" for="checkPontosTuristicos">
                            Pontos Turísticos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkEventosFestivais">
                        <label class="checkLabel" for="checkEventosFestivais">
                            Eventos e Festivais
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkRestaurantesCulinaria">
                        <label class="checkLabel" for="checkRestaurantesCulinaria">
                            Restaurantes e Culinária
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkComprasMercado">
                        <label class="checkLabel" for="checkComprasMercado">
                            Compras e Mercados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkBemEstarRelaxamento">
                        <label class="checkLabel" for="checkBemEstarRelaxamento">
                            Bem-Estar e Relaxamento
                        </label>
                    </div>
                </div>
                <div class="inputContainer">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkTransporte">
                        <label class="checkLabel" for="checkTransporte">
                            Transporte
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDicas">
                        <label class="checkLabel" for="checkDicas">
                            Dicas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkFamiliaCriancas">
                        <label class="checkLabel" for="checkFamiliaCriancas">
                            Família e Crianças
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkEsporteAventura">
                        <label class="checkLabel" for="checkEsporteAventura">
                            Esportes e Aventura
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkArteEntretenimento">
                        <label class="checkLabel" for="checkArteEntretenimento">
                            Arte e Entretenimento
                        </label>
                    </div>
                </div>
            </div>

            <div class="accordion mt-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Desafio 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio1">Título</label>
                                <input class="form-control" id="inputTituloDesafio1">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio1">Descrição</label>
                                <textarea class="form-control" id="inputDescricaoDesafio1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Desafio 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio2">Título</label>
                                <input class="form-control" id="inputTituloDesafio2">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio2">Descrição</label>
                                <textarea class="form-control" id="inputDescricaoDesafio2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Desafio 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="inputContainer">
                                <label class="label" for="inputTituloDesafio3">Título</label>
                                <input class="form-control" id="inputTituloDesafio3">
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="inputDescricaoDesafio3">Descrição</label>
                                <textarea class="form-control" id="inputDescricaoDesafio3"></textarea>
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
                    <input type="file" class="form-control-file" id="inputFotoCapa">
                </div>
                <div class="inputContainer mt-3">
                    <label for="inputFotoSecundaria1">Outras fotos</label>
                    <br>
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria1">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria2">
                    <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria3">
                </div>
            </fieldset>

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" id="checkColaboradores">
                <label class="checkLabel" for="checkColaboradores">
                    Colaboradores
                </label>
            </div>

            <select multiple class="form-control" id="multiselectColaboradores">
                <option>Janaina</option>
                <option>Carol</option>
                <option>Roberto</option>
            </select>

            <div class="d-flex justify-content-center mt-5 buttonContainer">
                <button class="btn btnTertiary">Cancelar</button>
                <button class="btn btnSecundary mx-2">Salvar rascunho</button>
                <button class="btn btnPrimary">Publicar</button>
            </div>
        </form>
    </div>
</body>

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