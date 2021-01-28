<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\nTabela filmes capagada\n";

$sql ="CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL (2,1)
    )
";

if ($bd->exec($sql))
    echo "\nTabela filmes criada\n";
else 
    echo "\nErro ao criar a tabela filmes\n";


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    'vingadores',
    'https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg',
    'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz.',
    8.4
)";

if ($bd->exec($sql))
    echo "\nFilmes inseridos\n";
else 
    echo "\nErro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Coringa',
        'https://www.themoviedb.org/t/p/w300/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg',
        'Em Coringa, Arthur Fleck (Joaquin Phoenix) trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais.',
        8.5
    )";
    
    if ($bd->exec($sql))
        echo "\nFilmes inseridos\n";
    else 
        echo "\nErro ao inserir filmes\n";

?>