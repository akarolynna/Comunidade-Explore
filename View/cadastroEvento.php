<?php
session_start();
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/menu2.css">
    <link rel="stylesheet" href='../Public/CSS/CadastroGeral.css'>
    <link rel="stylesheet" href='../Public/CSS/InputHora.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

</head>

<body class="pagina">
<?php require_once './Componentes/menu2.php'; ?>


    <div class="blocoPrincipal">
        <h2 class="titulo">Crie um Evento</h2>
        <form id="formCadEvento">
            <div class="inputContainer">
                <label class="label" for="inputTitulo">Título</label>
                <input class="form-control" id="inputTitulo" name="titulo" required>
            </div>
            <div class="inputContainer">
                <label class="label" for="inputLocalizacao">Localização</label>
                <input class="form-control" id="inputLocalizacao" name="localizacao" required>
            </div>
            <div class="inputGroup mt-4">
                <fieldset class="inputContainer">
                    <legend>Inicio</legend>
                    <div class="inputContainer">
                        <label class="label" for="inputDataInicio">Data</label>
                        <input id="inputDataInicio" name="dataInicio" class="form-control" type="date" required />
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="inputHoraInicio">Hora</label>
                        <div id="inputHoraInicio" class="input-group time">
                            <input type="text" class="form-control inputHora" id="inputHoraInicio" name="horaInicio" placeholder="HH:MM" required>
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
                        <input id="inputDataTermino" name="dataTermino" class="form-control" type="date" required />
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="inputHoraTermino">Hora</label>
                        <div id="inputHoraTermino" class="input-group time">
                            <input type="text" class="form-control inputHora" id="inputHoraTermino" name="horaTermino" placeholder="HH:MM" required>
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
                <textarea class="form-control" id="inputDescricao" name="descricao" required></textarea>
            </div>
            <div class="inputContainer mt-3">
                <label for="inputFotoCapa">Foto de capa</label>
                <br>
                <input type="file" class="form-control-file" id="inputFotoCapa" name="fotoCapa">
            </div>

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

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" id="checkMaxParticipantes">
                <label class="checkLabel" for="checkMaxParticipantes">
                    Capacidade máxima de participantes
                </label>
            </div>
            <input type="number" min="0" class="form-control mb-3" id="inputMaxParticipantes" name="maxParticipantes" value="0" />

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkColaboradores">
                <label class="checkLabel" for="checkColaboradores">
                    Colaboradores
                </label>
            </div>
            <select multiple class="form-control" id="multiselectColaboradores"></select>
        </form>

        <div class="d-flex justify-content-center mt-5 buttonContainer">
            <button class="btn btnSecundary mx-2" id="btnCancelar">Cancelar</button>
            <button class="btn btnPrimary" id="btnPublicar">Publicar</button>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../Public/JS/inputHora.js"></script>
<script src="../Public/JS/colaboradores.js"></script>
<script src="../Public/JS/cadastroEvento.js"></script>

</html>