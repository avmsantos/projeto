<?php include "cabecalho.php" ?>

<?php
//faz a busca dos dados do bando de dados
$bd = new SQLite3("filmes.db"); 
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);

$filme1 = ["titulo"=>"vingadores",
          "nota" => 8.4,
          "sinopse" => "Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz.",
          "poster" => "https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg"];

$filme2 = ["titulo"=>"Coringa",
          "nota" => 8.5,
          "sinopse" => "Em Coringa, Arthur Fleck (Joaquin Phoenix) trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais.",
          "poster" => "https://www.themoviedb.org/t/p/w300/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg"];

$filme3 = ["titulo"=>"Mulher-maravilha: 1984",
          "nota" => 5.4,
          "sinopse" => "Em 1984, Diana Prince entra em conflito com dois inimigos formidáveis, Maxwell Lord e a Mulher-Leopardo, enquanto reencontra misteriosamente com seu antigo interesse amoroso Steve Trevor.",
          "poster" => "https://www.themoviedb.org/t/p/w300/qDA95ebiy3W3m8hTRB3xZNZVVBM.jpg"];

$filme4 = ["titulo"=>"Jumanji: Próxima fase",
          "nota" => 6.9,
          "sinopse" => "Spencer volta ao mundo fantástico de Jumanji. Os amigos Martha, Fridge e Bethany entram no jogo e tentam trazê-lo para casa. Mas eles logo descobrem mais obstáculos e perigos a serem superados.",
          "poster" => "https://www.themoviedb.org/t/p/w300/bBRDUTr6jgbD8I8A9DvVGrVbdfB.jpg"];

//$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>
<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>

      <div class="nav-header center">
          <h1>PATIFARIA FILMES</h1>
      </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-4">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <div class="row">
      <?php while ($filme = $filmes->fetchArray()):?>
    <div class="col s12 m6 l3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme["poster"] ?>">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
          <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?> </p>
          <span class="card-title"><?= $filme["titulo"] ?></span>
          <p><?= $filme["sinopse"] ?></p>
        </div>
        
      </div>
    </div>
    <?php endwhile ?> 

  </div>
  </div>



</div>
</body>
</html>