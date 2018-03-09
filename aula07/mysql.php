<?php

$host = "localhost";
$user = "hilton";
$pass = "@da4linux";
$db = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

$query = "INSERT INTO posts (usuario_id,post) VALUES (4,'ESCREVENDO MAIS');"

//mysqli_query($conexao,$query);

|$query = "SELECT * FROM posts";
result = mysqli_query($conexao,$query);

var_dump($conexao);