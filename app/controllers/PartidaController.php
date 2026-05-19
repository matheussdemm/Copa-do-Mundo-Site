<?php

include("../config/database.php");
include("../app/models/Partida.php");

class PartidaController {

    private $partida;

    public function __construct($conn) {

        $this->partida = new Partida($conn);
    }

    // LISTAR
    public function index() {

        $result = $this->partida->listar();

        include("../app/views/partidas/index.php");
    }

    // CADASTRAR
    public function create() {

        if ($_POST) {

            $this->partida->cadastrar($_POST);

            header("Location: index.php");
            exit;
        }

        include("../app/views/partidas/create.php");
    }

    // EDITAR
    public function edit($id) {

        if ($_POST) {

            $this->partida->editar($_POST, $id);

            header("Location: index.php");
            exit;
        }

        $row = $this->partida->buscarPorId($id);

        include("../app/views/partidas/edit.php");
    }

    // EXCLUIR
    public function delete($id) {

        $this->partida->excluir($id);

        header("Location: index.php");
        exit;
    }
}