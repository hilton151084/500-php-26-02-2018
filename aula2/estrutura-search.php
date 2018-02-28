<?php

$nome = readline("Digite seu nome:");

switch ($nome) {
	case 'Lucas';
		echo "Eae Lucas";
		break;
	case 'Diego':
		echo "Eae Diego";
		break;
	case 'Gustavo':
		echo "Eae Gustavo";
		break;
	case 'Ze':
		echo "Ze";
		break;
	default:
		echo "eae estranho";
		break;
}