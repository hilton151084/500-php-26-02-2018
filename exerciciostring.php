<?php

echo "<pre>";

$nome = 'Hilton';
$idade = '34';
$peso = '70';
$altura = '1,70';

echo 'Nome: ' . $nome. ' Davi';
echo "<hr>";
echo 'Idade: ' . $idade. ' anos';
echo "<hr>";
echo 'Peso: ' . $peso. ' kg';
echo "<hr>";
echo 'Altura: ' .$altura. ' cm';
echo "<hr>";

$texto = <<<TXT
fazendo o teste
TXT;
echo "$texto";
echo "<hr>";

$bolo = "Bolo de castanhas";

$texto = <<< 'TXT'
Bolo de Castanhas
Ingredientes
150g de castanha do pará
100g de amêndoas
50g de nozes
1 xícara de açúcar
⅓ xícara de farinha de trigo
5 ovos
200g de manteiga derretida
TXT;

echo "$texto";
echo "<hr>";
