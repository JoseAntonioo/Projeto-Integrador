 <?php 
 		include_once 'conexao_bd.php';

	    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

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

		try{

			$conectar -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$update = $conectar ->prepare ('UPDATE usuarios SET nome = :nome, rg = :rg, cpf = :cpf, endereco = :endereco, n = :n, datan = :datan, 
										sexo = :sexo, telr = :telr, telc = :telc, email = :email, login = :login, senha = :senha WHERE id = :id');
			$update ->execute(array(
				
				':id' => $id,':nome' => $nome, ':rg' => $rg,
				':cpf' => $cpf,	':endereco' => $endereco, ':n' => $n, 
				':datan' => $datan,':sexo' => $sexo, ':telr' => $telr, 
				':telc'=> $telc, ':email' => $email, ':login' => $login, ':senha' => $senha
			));

		echo $update->rowCount();

		}catch(PDOException $e){
		
			echo 'ERRO: ' . $e->getMessage();
		}
			header("Location: consulta.php");
?>