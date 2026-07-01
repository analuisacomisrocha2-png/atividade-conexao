<?php 
//inclui o arquivo responsavel pela conexao

include "conexao.php";

$num1 = 10;
$num2 = 13;
$num3 = 20;
$resultado = $num1 + $num2 + $num3;

//linguagem sql

$sql ="INSERT INTO calculo(numero1, numero2,numero3, resultado)VALUES($num1, $num2, $num3, $resultado)";

if ($conexao->query($sql)){
   echo "<br> Dados da calculo dos tres numeros foram salvo com sucesso!";
    
}else{
    echo "<br> Erro ao salvar";
}



?>