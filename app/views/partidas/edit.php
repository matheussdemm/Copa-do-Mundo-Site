<?php include("../app/views/templates/header.php"); ?>

<h2>Editar Partida</h2>

<form method="POST">

    <!-- PRIMEIRA LINHA -->

    <div class="form-row">

        <div class="form-group">
            <label>Data</label>

            <input
                type="date"
                name="data"
                value="<?= $row['data'] ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Seleção 1</label>

            <input
                type="text"
                name="selecao_1"
                value="<?= $row['selecao_1'] ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Seleção 2</label>

            <input
                type="text"
                name="selecao_2"
                value="<?= $row['selecao_2'] ?>"
                required
            >
        </div>

    </div>

    <!-- SEGUNDA LINHA -->

    <div class="form-row">

        <div class="form-group">
            <label>Gols 1</label>

            <input
                type="number"
                name="gols_1"
                value="<?= $row['gols_selecao_1'] ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Gols 2</label>

            <input
                type="number"
                name="gols_2"
                value="<?= $row['gols_selecao_2'] ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Estádio</label>

            <input
                type="text"
                name="estadio"
                value="<?= $row['estadio'] ?>"
            >
        </div>

    </div>

    <!-- TERCEIRA LINHA -->

    <div class="form-row">

        <div class="form-group">

            <label>Fase</label>

            <select name="fase">

                <option <?= $row['fase']=="Grupos" ? "selected" : "" ?>>
                    Grupos
                </option>

                <option <?= $row['fase']=="Oitavas" ? "selected" : "" ?>>
                    Oitavas
                </option>

                <option <?= $row['fase']=="Quartas" ? "selected" : "" ?>>
                    Quartas
                </option>

                <option <?= $row['fase']=="Semifinal" ? "selected" : "" ?>>
                    Semifinal
                </option>

                <option <?= $row['fase']=="Final" ? "selected" : "" ?>>
                    Final
                </option>

            </select>

        </div>

        <div class="form-group">

            <label>Ano</label>

            <input
                type="number"
                name="ano"
                value="<?= $row['ano_copa'] ?>"
                required
            >
        </div>

        <div class="form-group form-button">

            <button type="submit">
                Salvar Alterações
            </button>

        </div>

    </div>

</form>

<?php include("../app/views/templates/footer.php"); ?>