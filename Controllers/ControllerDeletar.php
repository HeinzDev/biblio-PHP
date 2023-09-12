<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php 
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'reserva',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "produto",
    "reserva=?",
    array(
       $IdUser
    )
);
?>
<br>
<br>
<br>
<br>

<div class="Center container">
    <div class="row">
        <div class="col-1"></div>
        
        <div class="col-9">
        <div class="alert alert-Danger" role="alert">
  Documento Deletado!
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
        <a btn class="Center btn btn-danger"href="../index.php">voltar</a>

        </div>
        <div class="col-2"></div>


</div>