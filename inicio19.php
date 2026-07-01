<?php 
//inclui o arquivo responsavel pela conexao

include "conexao.php";

$num1 = 50;
$num2 = 10;
$num3 = 30;
$resultado = $num1 - $num2 - $num3;

//linguagem sql

$sql ="INSERT INTO substracao(numero1, numero2,numero3, resultado)VALUES($num1, $num2,$num3, $resultado)";

if ($conexao->query($sql)){
   echo "<br> Dados da substracao dos tres numeros foram salvo com sucesso!";
    
}else{
    echo "<br> Erro ao salvar os dados da substracao";
}



?>