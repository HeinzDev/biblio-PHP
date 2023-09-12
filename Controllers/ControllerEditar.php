<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");
$Crud = new ClassCrud();
if(1>0){
    $Crud->updateDB(
        "produto",
        "Livro=?,Categoria=?",
        "reserva=?",
        array(
            $Livro,
            $Categoria,
            $reserva
        )
);

#echo "modificacao :".$Livro." e ".$Categoria." e ".$reserva;
echo "Cadastro Editado com Sucesso!";}
?>
<a btn class="btn btn-primary"href="../index.php">voltar</a>