<?php include("../app/views/templates/header.php"); ?>

<h2>Cadastrar Partida</h2>

<form method="POST">

    Data:
    <input type="date" name="data" required>

    Seleção 1:
    <input type="text" name="selecao_1" required>

    Seleção 2:
    <input type="text" name="selecao_2" required>

    Gols 1:
    <input type="number" name="gols_1" required>

    Gols 2:
    <input type="number" name="gols_2" required>

    Estádio:
    <input type="text" name="estadio">

    Fase:

    <select name="fase">

        <option>Grupos</option>
        <option>Oitavas</option>
        <option>Quartas</option>
        <option>Semifinal</option>
        <option>Final</option>

    </select>

    Ano:
    <input type="number" name="ano" required>

    <button type="submit">
        Cadastrar
    </button>

</form>

<?php include("../app/views/templates/footer.php"); ?>