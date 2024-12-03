<?php 

//conexão do banco de dados
include 'conexao.php';

//receber os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];


$sql = "INSERT INTO tb_user VALUES (null, '$nome','$email','$cargo','$senha')";

if($conexao ->query($sql)) {
    echo "<script>alert('Inserido com sucesso!); window.location.href='../index.hmtl'<script>";
}else{
    echo "Falha na comunicação de dados";
}



?>