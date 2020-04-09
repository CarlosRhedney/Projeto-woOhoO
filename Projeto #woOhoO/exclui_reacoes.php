<?php
session_start();
if(!isset($_SESSION["usuario"])){
   header("Location: index.php?erro=1");
}
$id_usuario = $_SESSION["id_usuario"];
$dexar_curtindo_id_usuario = $_POST["dexar_curtindo_id_usuario"];
include("conexao_db.php");
$con = new db();
$conexao = $con->conecta_mysql();
if($id_usuario == "" || $dexar_curtindo_id_usuario == ""){
	die();
}
$sql = " DELETE FROM reacoes WHERE id_usuario = $id_usuario AND curtindo_id_usuario = $dexar_curtindo_id_usuario ";
mysqli_query($conexao, $sql);
?>