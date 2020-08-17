<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$delete_imagem_perfil = $_POST["delete_imagem_perfil"];
if($id_usuario == "" || $delete_imagem_perfil == ""){
	die();
}
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " DELETE FROM imagens WHERE id_usuario = $id_usuario AND id_imagem = $delete_imagem_perfil ";
mysqli_query($conexao, $sql);
?>
