<?php
//recebendo os dados da tela de login

$email = $_POST['emaillogin'];
$senhalogin = $_POST['passwordlogin'];

//link da conexão

include 'conexao.php';

//pegar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email' ";

$query = $conexao ->query($sql);

$result = $query->fetch_assoc();

print_r($result);

$email_banco = $result['email'];
$senha_banco = $result['senha'];

if($email == null && $senhalogin == null){
    echo  "<script> alert ('Nada inserido em um dos campos'); history.back(); </script>" ;
}

else if($email == $email_banco && $senhalogin == $senha_banco){
    session_start();
    $_SESSION['id'] = $result['id_usuario'];
    header ('location: ../tela_inicial.php');
} else {
    echo "<script> alert('Usuário ou senha inválida'); history.back(); </script>";
}
?>