<?php

$host = "localhost";
$user = "hilton";
$pass = "@da4linux";
$db = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

mysqli_query("INSERT INTO posts (usuario_id,post) VALUES (4,'ESCREVENDO MAIS');");

var_dump($conexao);