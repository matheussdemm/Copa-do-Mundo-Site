<?php include("../app/views/templates/header.php"); ?>

<h2>Lista de Partidas</h2>

<table>

<tr>
    <th>Data</th>
    <th>Jogo</th>
    <th>Fase</th>
    <th>Ano</th>
    <th>Ações</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<td>{$row['data']}</td>";

    echo "<td>
        {$row['selecao_1']}
        {$row['gols_selecao_1']} x
        {$row['gols_selecao_2']}
        {$row['selecao_2']}
    </td>";

    echo "<td>{$row['fase']}</td>";

    echo "<td>{$row['ano_copa']}</td>";

    echo "<td>

        <a href='index.php?acao=edit&id={$row['id']}'>
            Editar
        </a>

        |

        <a href='index.php?acao=delete&id={$row['id']}'>
            Excluir
        </a>

    </td>";

    echo "</tr>";
}
?>

</table>

<?php include("../app/views/templates/footer.php"); ?>