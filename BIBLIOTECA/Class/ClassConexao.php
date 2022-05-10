<?php

class ClassConexao{
    function conectaDB(){
try {
    $conn=new PDO("mysql:host=localhost;dbname=biblioteca","root","");
    return $conn;
} catch (PDOException $Erro) {
    return $Erro;
}
 }

}
?>