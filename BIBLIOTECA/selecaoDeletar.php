<link rel="stylesheet" href="Style.css">
<?php
require_once("Class/ClassCrud.php");
include("Includes/footer.php");
?>



<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-danger" href="index.php">Biblio!</a>
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
<h1 class="Center"> Deletar</h1>
<hr>

  

  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">

    <table class="Center TabelaDelete">
    <style> .TabelaDelete{float:center; ;width: 100%; text-align: center;}
    .TabelaDelete tr:first-child {background: rgb(211, 47, 47); color:#fff; font-weight: bold; font-size: 20px;}
    .TabelaDelete td{width: 30%;} </style>
     <tr>
         <td>Livro</td>
         <td>reserva</td>
         <td>Categoria</td>
         <td>Deletar<td>
     </tr>
     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrud();
     $BFetch=$Crud->selectDB(
         "*",
         "produto",
         "",
         array()
     );

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>



     <tr>
         <td><strong><?php echo $Fetch['Livro']; ?></strong></td>
         <td><?php echo $Fetch['reserva']; ?></td>
         <td><?php echo $Fetch['Categoria']; ?></td>
         <td>
         <br>
         <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?reserva={$Fetch['reserva']}"; ?>"><img src="Images/Delete2.png" alt="Deletar"></a>
        </td>
     </tr>
     
     <?php } ?>
</table></div>
<br><br>
<br><br>
<br><br>
<hr>
<div class="col-1"></div>
