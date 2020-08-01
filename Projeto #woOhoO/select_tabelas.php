<?php
$sql = " SELECT c.*, t.* FROM tb_usuarios AS t LEFT JOIN curtidas AS c ON (c.id_usuario = $id_usuario AND t.id = c.curtindo_id_usuario) ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$id_reacoes = $registro["id_reacoes"];
}

$sql = " SELECT n.*, t.* FROM tb_usuarios AS t LEFT JOIN naocurtidas AS n ON (n.id_usuario = $id_usuario AND t.id = n.nao_curtindo_id_usuario) ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$id_nao_curtidas = $registro["id_nao_curtidas"];
}

$sql = " SELECT f.*, t.* FROM tb_usuarios AS t LEFT JOIN favorito AS f ON (f.id_usuario = $id_usuario AND t.id = f.favorito_id_usuario) ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$id_favorito = $registro["id_favorito"];
}

$sql = " SELECT a.*, t.* FROM tb_usuarios AS t LEFT JOIN amei AS a ON (a.id_usuario = $id_usuario AND t.id = a.amei_id_usuario) ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$id_amei = $registro["id_amei"];
}

$sql = " SELECT * FROM imagens WHERE id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	if($registro){
		$nome = $registro["nome"];
	}else{
		$nome = isset($registro["nome"]);
	}
}
?>