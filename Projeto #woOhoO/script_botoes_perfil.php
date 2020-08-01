<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT COUNT(*) AS qtde_curtidas FROM curtidas WHERE curtindo_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_curtidas = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_curtidas = $registro["qtde_curtidas"];
}

$sql = " SELECT COUNT(*) AS qtde_nao_curtidas FROM naocurtidas WHERE nao_curtindo_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_nao_curtidas = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_nao_curtidas = $registro["qtde_nao_curtidas"];
}

$sql = " SELECT COUNT(*) AS qtde_favoritos FROM favorito WHERE favorito_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_favoritos = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_favoritos = $registro["qtde_favoritos"];
}

$sql = " SELECT COUNT(*) AS qtde_amei FROM amei WHERE amei_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_amei = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_amei = $registro["qtde_amei"];
}
?>