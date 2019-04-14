<?php
session_start();
if(!isset($_SESSION["usuario"])){
   header("Location: index.php?erro=1");
}
$id_usuario = $_SESSION["id_usuario"];
$seguir_id_usuario = $_POST["seguir_id_usuario"];
include("conexao_db.php");
$con = new db();
$conexao = $con->conecta_mysql();
if($id_usuario == "" || $seguir_id_usuario == ""){
	die();
}
$sql = " INSERT INTO usuarios_seguidores(id_usuario, seguindo_id_usuario) values($id_usuario, $seguir_id_usuario) ";
mysqli_query($conexao, $sql);
?>