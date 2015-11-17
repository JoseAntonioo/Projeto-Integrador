<?php
	try{

		include "conexao_bd.php";

		$login = $_POST ['login'];
		$senha = $_POST ['senha']	;

		$conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		$consulta = $conectar -> prepare("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");

		$consulta -> execute();

		$num = $consulta -> rowCount();

		if($num > 0){
		
			echo "Login Efetuado com sucesso";
			header ("Location: painel.php");
		
		}else {

			echo "Login incorreto";
			header("Location: login.php");
		
		}

	}catch (PDOException $e){

	echo $e -> getMessage();
	
	}
?>