<?php

	include_once "conexao_bd.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$consulta = $conectar -> query ("SELECT * FROM usuarios WHERE id = '$id'");
	$linha = $consulta -> fetch(PDO::FETCH_ASSOC);
?>
	<form name="signup" method="post" action="editar.php">

	Login: <input type="text" value = "<?php echo $linha['login'] ?>" name="login"/> 
	Senha: <input type="password" value = "<?php echo $linha['senha'] ?>" name="senha"/><br/><br/>
	Nome Completo: <input type="text" value = "<?php echo $linha['nome'] ?>" name="nome"/> <br/><br/>
	RG: <input type='text' name="rg" size='10' value = "<?php echo $linha['rg'] ?>"/> 
	CPF: <input type='text' name="cpf" size='10' value = "<?php echo $linha['cpf'] ?>"/> <br/><br/>
	Endereço: <input type="text"  value = "<?php echo $linha['endereco'] ?>" name="endereco"/>  
	Nº: <input type="number" value = "<?php echo $linha['n'] ?>" name="n" /> <br/><br/>
	Data de Nacimento: <input type="date" value = "<?php echo $linha['datan'] ?>" name="datan"/> <br/><br/>
	Sexo: <input type="radio" name="opcao" value="M"> Masculino <input type="radio" name="opcao" value="F"> Feminino <br/><br/>
	Telefone Residencial: <input type="tel" value = "<?php echo $linha['telr'] ?>" name="telr"/> 
	Telefone Celular: <input type="tel" value = "<?php echo $linha['telc'] ?>"name="telc"/> 
	E-mail: <input type="email" value = "<?php echo $linha['email'] ?>" name="email"/><br/><br/> 
	
	<input type="hidden" name="id" value = "<?php echo $linha['id'] ?>"/>
	<input type="submit" value="Editar"/>
		
	</form>
