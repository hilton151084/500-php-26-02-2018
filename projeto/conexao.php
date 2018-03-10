<?php

$host = "hilton";
$port = "localhost";
$dbname = "projeto";
$user = "hilton";
$pass = "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

function conecta(){
	global $con_string;
	return pg_connect($con_string);
}
function desconecta($con){
	pg_close($con);
}