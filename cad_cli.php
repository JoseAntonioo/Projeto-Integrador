<form name="signup" method="post" action="cadastrar.php">

	Login: <input type="text" name="login"/> Senha: <input type="password" name="senha"/><br/><br/>
	Nome Completo: <input type="text" name="nome"/> <br/><br/>
	RG: <input type='text' name="rg" size='10' value='' onkeypress='return SoNum(event)'/> CPF: <input type='text' name="cpf" size='10' value='' onkeypress='return SoNum(event)'/> <br/><br/>
	Endereço: <input type="text" name="endereco"/>  Nº: <input type="number" name="n" /> <br/><br/>
	Data de Nacimento: <input type="date" name="datan"/> <br/><br/>
	Sexo: <input type="radio" name="opcao" value="M" > Masculino <input type="radio" name="opcao" value="F" > Feminino <br/><br/>
	Telefone Residencial: <input type="tel" name="telr"/> Telefone Celular: <input type="tel" name="telc"/> 
	E-mail: <input type="email" name="email"/><br/><br/> 
	<input type="submit" value="Cadastrar"/>
		
</form>
