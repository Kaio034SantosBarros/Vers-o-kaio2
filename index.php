<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$servidor = "localhost";
	$usuario ="root";
	$senha ="";
	$nomebanco ="senac";

	$con = mysqli_connect("localhost", "root", "", "senac");
	$query = "select * from aluno";
	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

	if($total == 0){

		echo "Nenhum registro encontrado!";
	}

	while ($aluno = mysqli_fetch_array($consulta)){
		$id = $aluno['id'];
		$nome = $aluno['nome'];
		$bairro = $aluno['bairro'];
		$cidade = $aluno['cidade'];
		$tel = $aluno['telefone'];
		$email = $aluno['email'];

		echo "<p>Matricula: $id - Nome: $nome </p>
			<p>Cidade: $cidade ($bairro)</p>
			<p>E-mail: $email - Tel: $tel</p>
			<hr />";


	}

?>

<a href="cadastro.php">Cadastrar</a>


</body>
</html>