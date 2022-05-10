<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if(1>0){
$Crud->insertDB(
        "produto",
        "?,?,?",
        array(
           $Livro,
            $reserva,
            $Categoria
            )
        );
}
?>

<br>
<br>
<br>
<br>

<div class="Center container">
    <div class="row">
        <div class="col-1"></div>
        
        <div class="col-9">
        <div class="alert alert-success" role="alert">
  Cadastro Realizado!
</div>
        <br>


        </div>
        <div class="col-2"></div>


</div>

<div class="row">
        <div class="col-5"></div>
        
        <div class="col-5">

        <br>
        <br>
        <br>
        <br>
        <br>
        <a btn class="Center btn btn-success"href="../index.php">voltar</a>

        </div>
        <div class="col-2"></div>


</div>