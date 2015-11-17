<?php
	
	include_once "conexao_bd.php";

	try{

		// Execução da Instrução SQL
		$consulta = $conectar -> query ("SELECT * FROM usuarios");

		if ($consulta !== false){

			echo "Listagem de Usuários:";

			echo "<table border='1'> <tr> <td> Nome:</td> <td> Login: </td> <td> Ações </td> </tr>";

				while ($linha = $consulta -> fetch (PDO::FETCH_ASSOC)) {
		
				echo " <tr><td> $linha[nome] </td> <td> $linha[login] </td> <td> <a href='formeditar.php?id=$linha[id]'> Editar </a> - 
						<a href='excluir.php?id=$linha[id]'> Excluir </a></td></tr>";
				}

			echo "</table> <br/>";	

			echo $consulta -> rowCount() . " Registro(s) Exibido(s).";

		}else{
			
			echo "<p>Nenhum registro foi encontrado.</p>";
		}

	}catch (PDOException $e) {

		echo $e -> getMessage();

	}
 
?>