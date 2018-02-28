<?php

echo "<pre>";
$idade = 15;
$carteirinha = false;

//if (($idade >= 18) && $carteirinha === true){
//	echo "Maior Idade e carteirinha";
//} else if ($carteirinha = false) {
//	echo "maior de idade faça a carteirinha";
//} else{
//	echo "menor Idade";
//}

$a = "Marcos Lucas";

if ($a == "Lucas") {
	echo "Ola Lucas";
} else if ($a == "Marcos"){
	echo "Olá Marcos";
}else {
	echo "Olá estranho";
}

echo "<hr>";

$idade = 19;

//maior de 18 é obrigatório
//16 e <18 voto opcional
//<16 não vota

if ($idade >= 18 && $idade < 60) {
	echo "Voto obrigatório";
} else if ($idade >= 16 || $idade >= 60) {
	echo "Voto Opcional";
} else if ($idade < 16){
	echo "Não Vota";
} else {
	echo "Idade invalida";
}

echo "<br>";
$num = 2;
//se o numero dividido por 2 e resto da divisão = 0
// modulo % -> retorna o resto da divisão

if($num % 2 === 0) {
	echo "Par";
} else  { 
	echo "impar";
}