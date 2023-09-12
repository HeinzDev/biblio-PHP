
<!-- php codigo -->
<?php
    //require_once("Class/ClassConexao.php");
    require_once("Class/ClassCrud.php");

    require_once("Includes/header.php");
    include("Includes/footer.php");
$Crud = new ClassCrud();


    $Conexao= new ClassConexao();
    $Conexao->conectaDB();
    ?>

 