<?php
	include_once('conexao_bd.php');
?>

<?php
	/*session_start();
	if (!isset($_SESSION['login']) || isset($_SESSION['senha'])){
		header("Location: index.php");
		exit;
	}else {
		echo ("<center>Você está logado!</center>");
	}
*/
?>

<html>
	<head>
		<title>Painel</title>
	</head>
	<body>
		<br/>
		<br/>
		<center>
			<a href="logout.php">Sair</a>
		</center>
	</body>
</html>