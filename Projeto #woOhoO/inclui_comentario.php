<?php
session_start();
if(!isset($_SESSION["usuario"])){
   header("Location: index.php?erro=1");
}
$id_usuario = $_SESSION["id_usuario"];
$comentario = $_POST["comentario"];
include("conexao_db.php");
$con = new db();
$conexao = $con->conecta_mysql();
if($id_usuario == "" || $comentario == ""){
	die();
}
$sql = " insert into comentarios(id_usuario, comentario) values($id_usuario, '$comentario') ";
mysqli_query($conexao, $sql);
?>