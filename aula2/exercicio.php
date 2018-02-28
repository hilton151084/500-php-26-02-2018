<?php

//Nota
//Frequencia
//Se aprovado - Nota >= 7 e Frequencia .=8
//Recuperacao - Nota >= 5 e <7 e frequencia >=8
//Se reprovado - Nota <5 ou Frequencia <8










$nota = readLine("Digite a nota: ");
$frequencia = readLine("digite a frequencia: ");

if ($nota >= 7 && $frequencia >= 8){
	echo "Aprovado";
} else if ($nota >= 5 && $nota < 7 && $frequencia >=8){
	echo "Recuperacao";
} else if ($nota <5 || $frequencia < 8): {
	echo "Reprovado";
}
echo "\n";