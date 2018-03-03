<?php

// função pra retornar se o numero é par ou impar;
//função que receba dois numeros e retorne o maior;
//função que receba uma idade e retorne se é maior de idade;
//função que receba um array com informações de uma pessoa e diga se ela pode dirigir.
// pessoa = ['nome', 'idade', 'temHabilitacao']

function isParImpar ($num) {
	if ($num %2 == 0) {
		return "Par";
	}else {
		return "Impar";
	}
}

echo isParImpar(50);

echo "<hr>";

function maior($num1,$num2){
	if ($num1 == $num2) {
		return "Os dois são iguais";
	}else if ($num1 > $num2){
		return "O primeiro é maior";
	} else {
		return "O segundo é maior";
	}
}

echo maior (10,10);

echo "<hr>";

function maiorIdade($idade){
	if ($idade >=18) {
		return "maior Idade";
	}else {
		return "menor idade";
	}
}

echo maiorIdade (17);

echo "<hr>";

function impar($var) {

    return ($var % 2 == 1);

}

function par($var) {

    return ($var % 2 == 0);

}

$array = array (1,2,3,4,5,6,7,8,9,10);

$par  = array_filter($array, "par");

$impar = array_filter($array, "impar");

echo "Pares:". print_r($par)."<br>";

echo "Impares:". print_r($impar);


echo "<hr>";

// [0 => "Lucas",1 => 24]
function podeDirigir(array $pessoa){
	if ($pessoa['idade'] >= 18 && $pessoa['temHabilitacao']) {
		return "Pode Dirigir";
	} else {;
		return "Não Pode Dirigir";
	}
}

function podeDirigir2(int $idade, bool $temHabilitacao){
	if ($idade >= 18 && $temHabilitacao) {
		return "Pode Dirigir";
	} else {;
		return "Não Pode Dirigir";
	}	
}

$lucas = [
	'nome' => 'Lucas',
	'idade'=> 24,
	'temHabilitacao' => true
	];

echo podeDirigir($lucas);
echo podeDirigir($lucas['idade'],$lucas['temHabilitacao']);

