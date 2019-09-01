<?php
session_start();
if(!isset($_SESSION["usuario"])){
   header("Location: index.php?erro=1");
}
$id_usuario = $_SESSION["id_usuario"];
$texto_conversas = $_POST["texto_conversas"];
include("conexao_db.php");
$con = new db();
$conexao = $con->conecta_mysql();
if($id_usuario == "" || $texto_conversas == ""){
	die();
}
$sql = " INSERT INTO conversas(id_usuario, conversa) values($id_usuario, '$texto_conversas') ";
mysqli_query($conexao, $sql);
?>