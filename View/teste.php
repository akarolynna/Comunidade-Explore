<?php
require_once '../Controller/DiarioController.class.php';

$diarioController = new DiarioController();

// Chame a função para buscar os diários do usuário
$diarioController->buscarDiario();
