<?php 
//inclui o arquivo responsavel pela conexao

include "conexao.php";

$num1 = 10;
$num2 = 13;
$resultado = $num1 + $num2;

//linguagem sql

$sql ="INSERT INTO calculo(numero1, numero2, resultado)VALUES($num1, $num2, $resultado)";

if ($conexao->query($sql)){
   echo "<br> Dados salvo com sucesso!";
    
}else{
    echo "<br> Erro ao salvar";
}



?>