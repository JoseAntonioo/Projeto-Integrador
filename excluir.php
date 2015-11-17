<?php 
	
	include_once "conexao_bd.php";

	try{

		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

		$delete = $conectar -> prepare ("DELETE FROM usuarios WHERE id = :id");
		$delete -> bindParam (':id' , $id);
		$delete -> execute();

		header("Location: consulta.php");

	}catch (PDOException $e) {

		echo 'Erro: ' . $e -> getMessage();

	}
?>