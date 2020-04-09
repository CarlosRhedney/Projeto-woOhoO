<?php
include("conexao_db.php");

$usuario = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$data_nasc = $_POST["date"];
$sexo = $_POST["sexo"];

$con = new db();
$conexao = $con->conecta_mysql();

$usuario_existe = false;
$email_existe = false;

$sql = " select * from tb_usuarios where usuario = '$usuario' ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario["usuario"])){
		$usuario_existe = true;
	}
}else{
	echo "Erro ao tentar cadastrar usuário, favor entrar em contato com o admin do site!";
}

$sql = " select * from tb_usuarios where email = '$email' ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario["email"])){
		$email_existe = true;
	}
}else{
	echo "Erro ao tentar cadastrar usuário, favor entrar em contato com o admin do site!";
}

if($usuario_existe || $email_existe){
	$suporta_result = "";
	if($usuario_existe){
		$suporta_result .= "erroUsuario=1&";
	}
	if($email_existe){
		$suporta_result .= "erroEmail=1&";
	}
	header("Location: inscreva_se.php?".$suporta_result);
	die();
}

$sql = " insert into tb_usuarios(usuario, email, senha, data_nasc, sexo) values('$usuario', '$email', '$senha', '$data_nasc', '$sexo') ";
if(mysqli_query($conexao, $sql)){
	header("Location: inscreva_se.php?succadastro=1&");
}else{
	header("Location: inscreva_se.php?errocadastro=1&");
}
?>