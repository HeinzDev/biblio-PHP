<?php
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }
if(isset($_POST['Livro'])){ $Livro=filter_input(INPUT_POST,'Livro',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Livro'])){ $Livro=filter_input(INPUT_GET,'Livro',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Livro=""; }
if(isset($_POST['reserva'])){ $reserva=filter_input(INPUT_POST,'reserva',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['reserva'])){ $reserva=filter_input(INPUT_GET,'reserva',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $reserva=""; }
if(isset($_POST['Categoria'])){ $Categoria=filter_input(INPUT_POST,'Categoria',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Categoria'])){ $Categoria=filter_input(INPUT_GET,'Categoria',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Categoria=""; }
?>