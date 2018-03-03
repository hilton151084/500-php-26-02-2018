<?php

function negrito(){
	echo "<strong>Negrito</strong>";
}

negrito();

function italico($valor = "valor", $valor2 = "valor2"){
	echo "<i>Italico</i></br>";
}

italico ("Italico");
italico ("4linux");
italico ("Paulo");
italico ("um par", "dois par");
italico ();

echo "<hr>";

function quadrado($num){
	return $num * $num;
}

$var = quadrado(155);
echo "$var";

echo "<hr>";

$taxa = 1.09;

function taxar($valor){
	global $taxa;
	return $valor + $taxa;
}

echo taxar (10);

echo "<hr>";

function adicionar(&$fruta){
	return ++$fruta;
}

$laranjas = 5;
adicionar($laranjas);
echo $laranjas;

echo "<hr>";

$array = [1,2,3,4,5,6];
$pares = array_filter($array,function($valor){
	if ($valor % 2 == 0){
		return $valor;
	}
});
print_r($pares);

echo "<hr>";

$msg = "Olá";

$func = function($a) use ($msg){
	// $msg = "Hello";
	echo $msg.$a;
};

$func("4Linux");
