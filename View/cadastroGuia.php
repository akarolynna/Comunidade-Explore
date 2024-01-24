<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
                    <input class="form-control" id="inputCorPrincipal">
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
        
            <fieldset class="border p-2 mt-4">
                <legend>Desafio</legend>
                <div class="inputContainer">
                    <label class="label" for="inputTituloDesafio">Título</label>
                    <input class="form-control" id="inputTituloDesafio">
                </div>
                <div class="inputContainer">
                    <label class="label" for="inputTituloDesafio">Descrição</label>
                    <textarea class="form-control" id="inputDescricaoDesafio"></textarea>
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

            <div class="inputContainer mt-4">
                <label for="inputFoto">Foto do destino</label>
                <br>
                <input type="file" class="form-control-file" id="inputFoto">
            </div>

            <div class="d-flex justify-content-center mt-5 buttonContainer">
                <button class="btn btnTertiary">Cancelar</button>
                <button class="btn btnSecundary mx-2">Salvar rascunho</button>
                <button class="btn btnPrimary">Publicar</button>
            </div>
        </form>
    </div>    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>