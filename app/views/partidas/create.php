<?php include("../app/views/templates/header.php"); ?>
<form method="POST">

    <div class="form-row">

        <div class="form-group">
            <label>Data</label>
            <input type="date" name="data" required>
        </div>

        <div class="form-group">
            <label>Seleção 1</label>
            <input type="text" name="selecao_1" required>
        </div>

        <div class="form-group">
            <label>Seleção 2</label>
            <input type="text" name="selecao_2" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group">
            <label>Gols 1</label>
            <input type="number" name="gols_1" required>
        </div>

        <div class="form-group">
            <label>Gols 2</label>
            <input type="number" name="gols_2" required>
        </div>

        <div class="form-group">
            <label>Estádio</label>
            <input type="text" name="estadio">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group">
            <label>Fase</label>

            <select name="fase">

                <option>Grupos</option>
                <option>Oitavas</option>
                <option>Quartas</option>
                <option>Semifinal</option>
                <option>Final</option>

            </select>
        </div>

        <div class="form-group">
            <label>Ano</label>
            <input type="number" name="ano" required>
        </div>

        <div class="form-group form-button">
            <button type="submit">
                Cadastrar
            </button>
        </div>

    </div>

</form>

<?php include("../app/views/templates/footer.php"); ?>
<link rel="stylesheet" href="css/style.css">