<?php 
	
	include_once "conexao_bd.php";

	try{

		$nome = filter_var($_POST['nome']);
		$rg = filter_var($_POST['rg']);
		$cpf = filter_var($_POST['cpf']);
		$endereco = filter_var($_POST['endereco']);
		$n = filter_var($_POST['n']);
		$datan = filter_var($_POST['datan']);
		$sexo = filter_var($_POST['opcao']);
		$telr = filter_var($_POST['telr']);
		$telc = filter_var($_POST['telc']);
		$email = filter_var($_POST['email']);
		$login = filter_var($_POST['login']);
		$senha = filter_var($_POST['senha']);

		$insert = $conectar -> prepare ("INSERT INTO usuarios (nome, rg, cpf, endereco, n, datan, sexo, telr, telc, email, login, senha) 
										VALUES ('$nome', '$rg', '$cpf', '$endereco', '$n', '$datan', '$sexo', '$telr', '$telc', '$email', '$login', '$senha')");

		$insert -> bindParam (':nome', $nome);
		$insert -> bindParam (':rg', $rg);
		$insert -> bindParam (':cpf', $cpf);
		$insert -> bindParam (':endereco', $endereco);
		$insert -> bindParam (':n', $n);
		$insert -> bindParam (':datan', $datan);
		$insert -> bindParam (':opcao', $sexo);
		$insert -> bindParam (':telr', $telr);
		$insert -> bindParam (':telc', $telc);
		$insert -> bindParam (':email', $email);
		$insert -> bindParam (':login', $login);
		$insert -> bindParam (':senha', $senha);
		$insert -> execute();

		echo "Usuário Cadastrado com Sucesso.";

		header("Location: consulta.php");

	}catch (PDOException $e) {

		echo 'Erro: ' . $e -> getMessage();

	}
?>