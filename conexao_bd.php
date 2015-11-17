<?php
	
	try{
		//Conecta com o banco de dados.
		$conectar = new PDO("mysql:host=localhost;port=3306;dbname=cadastro;", "root", "");
				
	}catch (PDOException $e){
		
		echo 'Falha ao conectar com o banco de dados: ' . $e -> getMessage();
	
	}
	
?>