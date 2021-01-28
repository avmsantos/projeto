<?php

$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$nota = $_POST["nota"];
$poster = $_POST["poster"];

$bd = new SQLite3("filmes.db"); //vai abrir o banco de dados

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    '$titulo',
    '$poster',
    '$sinopse',
    $nota
)"; //monta o insert dentro de uma string

if ($bd->exec($sql))
    echo "\nFilmes inseridos\n";
else 
    echo "\nErro ao inserir filmes\n";
?>