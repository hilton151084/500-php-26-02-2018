<?php

$inteiro = 20;
var_dump($inteiro);
$cast = (float) $inteiro;
var_dump($cast);

echo "<hr>";
$flutuante = 5.5;
var_dump($flutuante);
$cast = (boolean) $flutuante;
var_dump($cast);

echo "<hr>";
$texto = "ola";
var_dump($texto);
$cast = (array) $texto;
var_dump($cast);

echo "<hr>";
$var = 1+ "10 carros";
var_dump($var);

echo "<hr>";
$var = "1 carro" + "1 carro";
var_dump($var);

echo "<hr>";
$var = $var +2.50;
var_dump ($var);

echo "<hr>";
define("TESTE" ,50);

const CARRO = "ONLINE";
echo CARRO;
echo TESTE;

echo "<hr>";
$nomeCompleto = "Hilton Davi";
echo $nomeCompleto;
echo "<br>";
$idade = "34 anos";
echo $idade;
echo "<br>";
$cidade = "Guarulhos";
echo $cidade;
echo "<br>";
$sexo = "masculino";
echo $sexo;
echo "<br>";
$andando = true;
echo $andando;


