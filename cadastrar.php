<?php include "cabecalho.php" ?>

<body>
<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>

      <div class="nav-header center">
          <a href="galeria.php"><h1>PATIFARIA FILMES</h1></a>
      </div>
</nav>

  <div class="row">
  <form action="inserirfilme.php" method="POST">
      <div class="col s6 offset-s3">
           <div class="card">
               <div class="card-content">
                   <span class="card-title">Casastrar Filme</span>
                   <!-- Input do titulo -->
                   <div class="row">                 
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="titulo" require>
                            <label for="titulo">Titulo do filme</label>
                        </div>
                   </div>
                   <!-- text area da sinopse -->
                   <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Sinopse</label>
                                </div>
                            </div>
                    </div>
                    <!-- Input da nota -->
                    <div class="row">                 
                        <div class="input-field col s4">
                            <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                   </div>
                    <!-- Input capa do filme -->
                   <div class="file-field input-field">
                        <div class="btn purple darken-1 black-text">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster">
                        </div>
                    </div>

               <div class="card-action">
                   <a class="waves-effect waves-light btn  grey darken-1" href="galeria.php">Cancelar</a>
                   <button type="submit" class="waves-effect waves-light btn purple darken-4">Confirmar</button>
               </div>
           </div>
      </div>
  </div>
</form>
</div>


</body>
