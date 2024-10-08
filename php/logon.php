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

if($email == $email_banco && $senhalogin == $senha_banco){
    header ('location: ../tela_inicial.html');
} else {
    echo "<script> alert('Usuário ou senha inválida'); history_back(); </script>";
}

?>