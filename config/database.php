<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "copa_mundo"
);

if (!$conn) {
    die("Erro na conexão");
}

mysqli_set_charset($conn, "utf8mb4");