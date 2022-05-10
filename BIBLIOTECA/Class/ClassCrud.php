<?php
include 'ClassConexao.php';

class ClassCrud extends ClassConexao{
    private $Crud;
    private $Contador;

    #Preparação das declativas
    private function preparedStatements($Query , $Parametros)
    {
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);

        if($this->Contador > 0){
            for($I=1; $I <= $this->Contador; $I++){
                $this->Crud->bindValue($I,$Parametros[$I-1]);
            }
        }

        $this->Crud->execute();
    }

    #Contador de parâmetros
    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    }


public function insertDB($Tabela , $Condicao , $Parametros){
    $this->preparedStatements("insert into {$Tabela} values ({$Condicao})" , $Parametros);
    return $this->Crud;
}

#Seleção no Banco de Dados
public function selectDB($Campos , $Tabela , $Condicao , $Parametros){
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}",$Parametros);
    return $this->Crud;
}

public function deleteDB($Tabela , $Condicao , $Parametros){
    $this->preparedStatements("delete from {$Tabela} where {$Condicao}" , $Parametros);
    return $this->Crud;
}

#Atualização no banco de dados
public function updateDB($Tabela , $Set , $Condicao , $Parametros){
    $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}",$Parametros);
    return $this->Crud;
    echo "query SQL é igual a :"."update {$Tabela} set {$Set} where {$Condicao}";
}
}
?>