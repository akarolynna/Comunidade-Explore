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
    <link rel="stylesheet" href='../Public/CSS/InputHora.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

</head>

<body class="pagina">
    <?php        
        require_once './Componentes/menu.php';
    ?>
 
    <div class="blocoPrincipal">
        <h2 class="titulo">Crie um Evento</h2>
        <form id="formCadEvento">
            <div class="inputContainer">
                <label class="label" for="inputTitulo">Título</label>
                <input class="form-control" id="inputTitulo" required>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputLocalizacao">Localização</label>
                <input class="form-control" id="inputLocalizacao" required>
            </div>
            <div class="inputGroup mt-4">
                <fieldset class="inputContainer">
                    <legend>Inicio</legend>
                    <div class="inputContainer">
                        <label class="label" for="inputDataInicio">Data</label>
                        <input id="inputDataInicio" name="dataInicio" class="form-control" type="date" />
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="inputHoraInicio">Hora</label>
                        <div id="inputHoraInicio" class="input-group time">
                            <input type="text" class="form-control inputHora" id="inputHoraInicio" name="horaInicio" placeholder="HH:MM">
                            <div class="input-group-append input-group-addon">
                                <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="inputContainer">
                    <legend>Término</legend>
                    <div class="inputContainer">
                        <label class="label" for="inputDataTermino">Data</label>
                        <input id="inputDataTermino" name="dataTermino" class="form-control" type="date" />
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="inputHoraTermino">Hora</label>
                        <div id="inputHoraTermino" class="input-group time">
                            <input type="text" class="form-control inputHora" id="inputHoraTermino" name="horaInicio" placeholder="HH:MM">
                            <div class="input-group-append input-group-addon">
                                <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="inputContainer mt-4">
                <label class="label" for="inputDescricao">Descrição</label>
                <textarea class="form-control" id="inputDescricao"></textarea>
            </div>
            <div class="inputContainer">
                <label class="label" for="multiselectCategorias">Categorias</label>
                <select multiple class="form-control" id="multiselectCategorias">
                    <option>Neve</option>
                    <option>Montanha</option>
                    <option>Praia</option>
                </select>
            </div>

            
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" id="checkMaxParticipantes">
                <label class="checkLabel" for="checkMaxParticipantes">
                    Capacidade máxima de participantes
                </label>
            </div>
            <input type="number" min="1" class="form-control mb-3" id="inputMaxParticipantes" required/>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkColaboradores">
                <label class="checkLabel" for="checkColaboradores">
                    Colaboradores
                </label>
            </div>
            <select multiple class="form-control" id="multiselectColaboradores"></select>
            
            <div class="d-flex justify-content-center mt-5 buttonContainer">
                <button class="btn btnSecundary mx-2">Cancelar</button>
                <button class="btn btnPrimary">Salvar</button>
            </div>
        </form>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="../Public/JS/inputHora.js"></script>
<script src="../Public/JS/colaboradores.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>