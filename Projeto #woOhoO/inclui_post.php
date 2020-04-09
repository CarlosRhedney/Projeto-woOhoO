<?php
session_start();
if(!isset($_SESSION["usuario"])){
   header("Location: index.php?erro=1");
}
$id_usuario = $_SESSION["id_usuario"];
$texto_post = $_POST["texto_post"];
include("conexao_db.php");
$con = new db();
$conexao = $con->conecta_mysql();
if($id_usuario == "" || $texto_post == ""){
	die();
}
$sql = " insert into post(id_usuario, post) values($id_usuario, '$texto_post') ";
mysqli_query($conexao, $sql);
?>