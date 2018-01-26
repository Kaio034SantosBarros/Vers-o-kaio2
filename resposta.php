<?php 
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];

	$con = mysqli_connect("localhost", "root", "", "senac");

	$query = "select * from aluno where email = '$email'";
	$consulta = mysqli_query($con, $query);
	$total = mysqli_num_rows($consulta);

	if($total == 1){

		echo "Este e-mail já foi cadastrado no sistema, tente outro!";
	}else{

	$query = "insert into aluno(nome, telefone, email, cidade, bairro) 
			values ('$nome', '$telefone', '$email', '$cidade', '$bairro')";

	mysqli_query($con, $query);

	echo "Usuário($nome), foi cadastrado com sucesso!";

	header("Refresh: 3, index.php");
}
?>