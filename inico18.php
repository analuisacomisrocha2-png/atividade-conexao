<?php 
//inclui o arquivo responsavel pela conexao

include "conexao3.php";

$num1 = 20;
$num2 = 5;
$num3 = 4;
$resultado = $num1 * $num2 * $num3;

//linguagem sql

$sql ="INSERT INTO multiplicacao(numero1, numero2,numero3, resultado)VALUES($num1, $num2,$num3, $resultado)";

if ($conexao->query($sql)){
   echo "<br> Dados da multilicacao dos tres numeros foram salvo com sucesso!";
    
}else{
    echo "<br> Erro ao salvar os dados da multiplicacao";
}



?>