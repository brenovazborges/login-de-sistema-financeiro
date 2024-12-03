<?php
include 'conexao.php';

$id = intval($_GET['id']);
$sql = "DELETE FROM tb_user WHERE id = $id";
$conexao->query($sql);


if ($result) {
    echo "<script> alert('Usuário excluido com sucesso'); window.location.href = '../listar_user.php'; </script>";
}

$conexao->close();
?>