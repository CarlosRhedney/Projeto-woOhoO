<?php
session_start();
if(!isset($_SESSION["email"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$usuario = $_POST["usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " UPDATE tb_usuarios SET usuario = '$usuario' WHERE id = $id_usuario ";
mysqli_query($conexao, $sql);
?>