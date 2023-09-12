<link rel="stylesheet" href="Style.css">
<?php
require_once("Class/ClassCrud.php");
include("Includes/footer.php");
?>



<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php"><h3>Biblio!<h3></a>
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
<div class="container">
<div class="row">
  <div class="col-1"></div>
  <div class="col-10">

  <br>
<table class="Center TabelaCrud">
  <style>.TabelaCrud{width: 100%; text-align: center; border-radius: 10px;}
    .TabelaCrud tr:first-child {background: rgb(77, 77, 77); color:#fff; font-weight: bold; font-size: 25px; border-radius: 10px;}
    .TabelaCrud td{width: 20%;}
</style>
     <tr>
         <td><h2>Livro</h2></td>
         <td><h2>Reserva</h2></td>
         <td><h2>Categoria</h2></td>
         <td><h2>Ferramentas</h2></td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrud();
     $BFetch=$Crud->selectDB(
         "*",
         "produto",
         "",
         array(
         )
     );

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>
     
     <tr class="Center">
         <td><h2><?php echo $Fetch['Livro']; ?></h2></td>
         <td><h2><?php echo $Fetch['reserva']; ?></h2></td>
         <td><h2><?php echo $Fetch['Categoria']; ?></h2></td>
         <td>
         <table class="Center TabelaCrud">
           <br>
           <hr>
         <a class="Center" href="<?php echo "visualizar.php?reserva={$Fetch['reserva']}"; ?>"><img src="Images/view.png" alt="Visualizar"></a>  
         <a class="Center" href="<?php echo "editar.php?reserva={$Fetch['reserva']}"; ?>"><img src="Images/Edit.png" alt="Editar"></a>
         <a class="Deletar Center" href="<?php echo "Controllers/ControllerDeletar.php?reserva={$Fetch['reserva']}"; ?>"><img src="Images/Delete.png" alt="Deletar"></a>
        <hr> 
        </td>
     </table>
     </tr>
     <?php } ?>

     </div>
     </div>

     <div class="col-1"></div>
  
</table>
