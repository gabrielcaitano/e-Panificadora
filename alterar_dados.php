<?php
    session_start();
    include ("conexao.php");
    
    if (empty($_POST['cep']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['bairro'])){
        header('Location: Cliente.php');
        exit();
    }
    $cep = mysqli_real_escape_string($conexao,trim($_POST['cep']));
    $rua = mysqli_real_escape_string($conexao,trim($_POST['rua']));
	$bairro = mysqli_real_escape_string($conexao,trim($_POST['bairro']));
    $numero = mysqli_real_escape_string($conexao,trim($_POST['numero']));
    
    $sql = "SELECT * from cliente where usuario = '{$_SESSION['usuario']}'";
    $resultado = $conexao->query($sql);
    $row = $resultado->fetch_assoc();
    $bd_cep = $row["cep"];
    $bd_bairro = $row["bairro"];
    $bd_rua = $row["endereco"];
    $bd_numero =  $row["numero"];

    if($cep != $bd_cep || $rua != $bd_rua || $bairro != $bd_bairro || $numero != $bd_numero){
        $sql = "UPDATE `cliente` SET `cep`='{$cep}',`endereco`='{$rua}',`numero`='{$numero}',`bairro`='{$bairro}' WHERE usuario = '{$_SESSION['usuario']}'";
        $result = mysqli_query($conexao, $sql);
        header('Location: Cliente.php');
        exit();
    }
    else{
        header('Location: Cliente.php');
        exit();
    }
?>