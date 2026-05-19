<?php

include("../app/controllers/PartidaController.php");
include("../config/database.php");

$controller = new PartidaController($conn);

$acao = $_GET['acao'] ?? 'index';

$id = $_GET['id'] ?? null;

switch($acao) {

    case 'create':
        $controller->create();
        break;

    case 'edit':
        $controller->edit($id);
        break;

    case 'delete':
        $controller->delete($id);
        break;

    default:
        $controller->index();
}