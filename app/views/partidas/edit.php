<?php include("../app/views/templates/header.php"); ?>

<h2>Editar Partida</h2>

<form method="POST">

    Data:
    <input type="date"
           name="data"
           value="<?= $row['data'] ?>">

    Seleção 1:
    <input type="text"
           name="selecao_1"
           value="<?= $row['selecao_1'] ?>">

    Seleção 2:
    <input type="text"
           name="selecao_2"
           value="<?= $row['selecao_2'] ?>">

    Gols 1:
    <input type="number"
           name="gols_1"
           value="<?= $row['gols_selecao_1'] ?>">

    Gols 2:
    <input type="number"
           name="gols_2"
           value="<?= $row['gols_selecao_2'] ?>">

    Estádio:
    <input type="text"
           name="estadio"
           value="<?= $row['estadio'] ?>">

    Ano:
    <input type="number"
           name="ano"
           value="<?= $row['ano_copa'] ?>">

    <button type="submit">
        Salvar
    </button>

</form>

<?php include("../app/views/templates/footer.php"); ?>