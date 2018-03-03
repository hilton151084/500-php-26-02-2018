<?php

// função pra retornar se o numero é par ou impar;
//função que receba dois numeros e retorne o maior;
//função que receba uma idade e retorne se é maior de idade;
//função que receba um array com informações de uma pessoa e diga se ela pode dirigir.
// pessoa = ['nome', 'idade', 'temHabilitacao']

$array = [1,2,3,4,5,6];
$pares = array_filter($array,function($valor){
	if ($valor % 2 == 0){
		return $valor;
	}
});
print_r($pares);