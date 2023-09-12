<nav class="navbar navbar-expand-lg navbar-light text-light bg-dark">
  <div class="container-fluid text-light">
    <a class="navbar-brand text-success" href="index.php">Biblio!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opções
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastro.php">Cadastrar</a></li>
          
            <li><a class="dropdown-item" href="selecao.php">Selecionar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="selecaoDeletar.php">deletar</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Cadastro -->

<?php
include("Class/ClassCrud.php");
  $Acao="Cadastrar";
?>

<div class="Resultado"></div>

<div class="Formulario">

    <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="reserva" name="reserva" value="<?php echo $reserva; ?>">
</form>

<link rel="stylesheet" href="Style.css">
<div class="Content">
    <div class="Resultado"></div>

    <div class="Formulario">
        <h1 class="Center">Cadastro</h1>
<br>
        <form class="center" name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
            <div class="FormularioInput-center">
                <strong>Nome do Livro</strong> <br>
                <input type="text" id="Livro" name="Livro">
            </div>
</br>
            <div class="FormularioInput-center">
                <strong>reserva</strong> <br>
                <input type="text" id="reserva" name="reserva">
            </div>
</br>
            <div class="FormularioInput-center">
               <strong>Categoria</strong> <br>
                <input type="text" id="Categoria" name="Categoria">
            </div>
<br>
<br>
            <div class="FormularioInput FormularioInput100">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</div>

<!-- Fim do cadastro-->

<?php
include("Includes/footer.php");
?>