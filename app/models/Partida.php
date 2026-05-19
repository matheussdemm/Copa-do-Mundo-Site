<?php

class Partida {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }


    public function listar() {

        $sql = "SELECT * FROM partidas
                ORDER BY ano_copa DESC, data DESC";

        return mysqli_query($this->conn, $sql);
    }


    public function cadastrar($dados) {

        $sql = "INSERT INTO partidas
        (
            data,
            selecao_1,
            selecao_2,
            gols_selecao_1,
            gols_selecao_2,
            estadio,
            fase,
            ano_copa
        )

        VALUES (
            '{$dados['data']}',
            '{$dados['selecao_1']}',
            '{$dados['selecao_2']}',
            {$dados['gols_1']},
            {$dados['gols_2']},
            '{$dados['estadio']}',
            '{$dados['fase']}',
            {$dados['ano']}
        )";

        return mysqli_query($this->conn, $sql);
    }


    public function buscarPorId($id) {

        $sql = "SELECT * FROM partidas WHERE id = $id";

        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_assoc($result);
    }


    public function editar($dados, $id) {

        $sql = "UPDATE partidas SET

            data = '{$dados['data']}',
            selecao_1 = '{$dados['selecao_1']}',
            selecao_2 = '{$dados['selecao_2']}',
            gols_selecao_1 = {$dados['gols_1']},
            gols_selecao_2 = {$dados['gols_2']},
            estadio = '{$dados['estadio']}',
            fase = '{$dados['fase']}',
            ano_copa = {$dados['ano']}

            WHERE id = $id
        ";

        return mysqli_query($this->conn, $sql);
    }

  
    public function excluir($id) {

        $sql = "DELETE FROM partidas WHERE id = $id";

        return mysqli_query($this->conn, $sql);
    }
}