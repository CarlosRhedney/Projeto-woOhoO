<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$delete_post = $_POST["delete_post"];
if($id_usuario == "" || $delete_post == ""){
	die();
}
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " DELETE FROM post WHERE id_usuario = $id_usuario AND id_post = $delete_post ";
mysqli_query($conexao, $sql);
?>
