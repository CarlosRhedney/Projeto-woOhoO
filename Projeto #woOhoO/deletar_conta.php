<?php
session_start();
if(!isset($_SESSION["email"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$email = $_SESSION["email"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " DELETE FROM tb_usuarios WHERE id = $id_usuario AND email = '$email' ";
mysqli_query($conexao, $sql);
?>