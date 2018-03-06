<!DOCTYPE html>
<html>
<head>
	<title>4linux - form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<h2>meu form</h2>
	<form action="" method="POST">
		<div class="form-row">
		<div class="col">
		<label>Nome:</label>
		<input type="text" name="nome"></div>
		<div class="col">
		<label>sobrenome:</label>
		<input type="text" name="sobrenome"></div>
		</div>
		<div class="form-group">
		<label>Email:</label>
		<input type="Email" name="Email"></div>
		<label>Idade:</label>
		<input type="number" name="idade"></div>
		<label>Data de nascimento:</label>
		<input type="date" name="nascimento"></div>
		<div class="form-group">
		<label>Sexo:</label>
		<input type="radio" name="genero" value="M">M
		<input type="radio" name="genero" value="F">F</div>

		<input type="submit" value="Enviar"></div>
		<input type="reset">

	</form>
</div>
<div class="col">
<?php

if (!empty ($_POST)) {
	$msg = "<p>Olá, eu sou o {$_POST["nome"]},tenho {$_POST["idade"]},etc.</p>";
	echo "$msg";
}
?>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>