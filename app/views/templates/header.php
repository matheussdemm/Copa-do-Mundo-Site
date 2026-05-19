<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Sistema Copa</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h1>⚽ Sistema Copa do Mundo</h1>

<nav>

    <a href="index.php">Home</a>

    <a href="index.php?acao=create">
        Cadastrar
    </a>

</nav>

<hr>

<?php if(isset($_SESSION['mensagem'])): ?>

    <div class="alert <?= $_SESSION['tipo'] ?>">

        <?= $_SESSION['mensagem']; ?>

    </div>

    <?php
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo']);
    ?>

<?php endif; ?>