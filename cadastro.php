<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Cadastro de Aluno</h1>
	<form method="post" action="resposta.php">
		<div class="form-group">
			<label>Nome: </label>
			<input type="text" class="form-control" name="nome">
		</div>
		<div class="form-group">
			<label>E-mail: </label>
			<input type="text" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label>Telefone: </label>
			<input type="text" class="form-control" name="telefone">
		</div>
		<div class="form-group">
			<label>Cidade: </label>
			<input type="text" class="form-control" name="cidade">
		</div>
		<div class="form-group">
			<label>Bairro: </label>
			<input type="text" class="form-control" name="bairro">
		</div>
		<button type="submit" class="btn btn-outline-primary">Enviar</button>
	</form>
	</div>
</body>
</html>