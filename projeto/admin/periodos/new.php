<?php include 'topo.php' ?>
<?php include '../../data/database-periodos.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Novo <small>Período</small></h2>	
	</div>

	<form action="#" method="POST">
		<div class="form-group">
			<label for="periodo">Periodo</label>
			<input type="text" name="periodo" class="form-control" placeholder="Periodo" required>
		</div>

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>
</div>

<?php 
	if (!empty($_POST)){

		$periodo = [
			'descricao' => $_POST['periodo'],
	];

	inserePeriodo($periodo);
	header("location:index.php");
}

?>
<?php include 'rodape.php' ?>