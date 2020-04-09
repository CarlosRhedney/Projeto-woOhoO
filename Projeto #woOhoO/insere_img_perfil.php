<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$usuario = $_SESSION["usuario"];
$imagem = $_FILES["imagem"];
$nome = $_FILES['imagem']['name'];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " INSERT INTO imagens(id_usuario, nome, img) values($id_usuario, '$nome', '$imagem') ";
mysqli_query($conexao, $sql);
// Array criado para guardar o caminho das imagens dos usuarios
// Dentro de img diretorio existente na aplicaçao, foi criado o diretorio img_perfil,
// Criado especificamente para guardar a imagem de perfil dos usuarios
// Foi concatenado com o usuario para criar uma pasta especifica com seu nome
// Pasta criada para guardar as imagens dos usuarios com todas as permissoes
// Move a imagem para a pasta do usuario logado
$_UP["pasta"] = "img/img_perfil/";
mkdir($_UP["pasta"], 0777);
$_UP["pasta"] = "img/img_perfil/".$usuario."/";
mkdir($_UP["pasta"], 0777);
if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $_UP["pasta"].$nome)){
	header("Location: postagens.php");
}
?>