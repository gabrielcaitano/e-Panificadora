<?php
    session_start();
    include ("conexao.php");

    if(empty($_POST['usuario']) || empty($_POST['password'])){
        header('Location: index.php');
		exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['password']);
    
    $sql = "SELECT usuario from login where usuario = '{$usuario}' and senha = '{$senha}'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: Cliente.php');
        exit();
    }
    else{
        header('Location: index.php');
        exit();
    }

?>