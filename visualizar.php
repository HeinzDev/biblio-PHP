<link rel="stylesheet" href="Style.css">
<?php
include("Class/ClassCrud.php");
?>
<div class="Center Content">
    <?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'reserva',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "produto",
            "where reserva=?",
            array($IdUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1 class="Center">Dados do Usuário</h1>
    <hr>
    <br>
    <br>
    <h2 class="Center"><strong>Livro:</strong> <?php echo $Fetch['Livro']; ?><br></h2>
    <h2 class="Center"><strong>reserva:</strong> <?php echo $Fetch['reserva']; ?><br></h2>
    <h2 class="Center"><strong>Categoria:</strong> <?php echo $Fetch['Categoria']; ?><br></h2>
</div>

<?php include("Includes/Footer.php"); ?>

