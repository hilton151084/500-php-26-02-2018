montar formulario que receba dois numeros

submit

mostrar na tela
a soma dos dois numeros
a subtração dos dois numeros
a multiplicação dos dois numeros
a divisão dos dois numeors;

<!DOCTYPE html>
<html>
<head>
	<title>calc</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h2>exercicio calc</h2>
<script> 
function soma() 
{
form.campo3.value = (form.campo1.value*1) + (form.campo2.value*1)
}
</script>
<form name="form">
<input name="campo1"><br> 
<input name="campo2"><br> 
<input name="campo3" readonly><br>
<input type="button" onclick="soma()" value="Soma os Valores">
</form></div>
<form action="" method="POST">
<label>primeiro numero</label>
<input type="number" name="numero1"><br>
<label>segundo numero</label>
<input type="number" name="numero2"><br>
<input name="campo3" readonly><br>
<input type="submit" value="enviar">
</form>