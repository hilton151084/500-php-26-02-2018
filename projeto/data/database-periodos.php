<?php

require_once 'conexao.php';

function listaPeriodos (){
	
	$con = conecta()

	$sql = "SELECT * FROM tb_periodos ORDER BY id";
	$result = pg_query($con,$sql);
	$tb_periodos = pg_fetch_all($result);

	desconecta($con);
	return $tb_periodos;
}

function listaPeriodosPorId ($id){

	$con = conecta();

	$sql = "SELECT * FROM tb_periodos WHERE id = {id}";
	$result = pg_query($con,$sql);
	$usuarios = pg_fetch_assoc($result);
}

function inserePeriodo (array $periodo){
	$con = conecta();
	$sql = "INSERT INTO tb_periodos (descricao) 
			VALUES('{$descricao['descricao']}')";
	pg_query($con,$sql);

	desconecta($con);
}

function atualizaPeriodo (array $periodo) {
	$con = conecta();

	$sql = "UPDATE tb_periodos SET periodo = '{$periodo['periodo']} WHERE id={$periodo['id']}";

	pg_query($con,$sql);

	desconecta($con);
}

function deletaPeriodo ($id){
	$con = conecta();

	$sql = "DELETE FROM tb_periodos WHERE id={$id}";

	pg_query($con,$sql);

	desconecta($con);
}