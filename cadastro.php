<?php
	session_start();
	include ("conexao.php");

		#conferindo se algum dado veio vazio
	    if(empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['CPF']) ||empty($_POST['celular']) || empty($_POST['cep']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['bairro'])){
			header('Location: TCadastro.php');
			exit();
		}
		?>
		<html>
        <body>
		<?php
	    #recuperando os dados
		$usuario = mysqli_real_escape_string($conexao,trim($_POST['usuario']));
		$senha = mysqli_real_escape_string($conexao,trim($_POST['senha']));
        $nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao,trim($_POST['email']));
        $cpf = mysqli_real_escape_string($conexao,trim($_POST['CPF']));
        $celular = mysqli_real_escape_string($conexao,trim($_POST['celular']));
        $cep = mysqli_real_escape_string($conexao,trim($_POST['cep']));
        $rua = mysqli_real_escape_string($conexao,trim($_POST['rua']));
		$bairro = mysqli_real_escape_string($conexao,trim($_POST['bairro']));
		$numero = mysqli_real_escape_string($conexao,trim($_POST['numero']));
	
		#verificando se o usuario existe no banco de dados
		$sql = "SELECT count(*) as total from cliente where Usuario = '$usuario'";
		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row['total'] == 1){
			$_SESSION['usuario_existe'] = true;
			header('Location: TCadastro.php');
			exit();
		}
	
		#inserindo no banco Tabela cliente
		$sql = "INSERT INTO Cliente(Usuario, Nome, email, cpf, celular, cep, endereco, numero, bairro) VALUES('$usuario','$nome','$email','$cpf','$celular','$cep','$rua','$numero','$bairro')";
		#inserindo no banco Tabela login
		$sql2 = "INSERT INTO login (Usuario, senha) VALUES('$usuario','$senha')";
		if($conexao->query($sql) === TRUE && $conexao->query($sql2) === TRUE){
			$_SESSION['status_cadastro'] = true;
		}
	
		#encerrando a conexao
		$conexao->close();
		header('Location: TCadastro.php');
		exit();
	?>
	</body>
    </html>
	


