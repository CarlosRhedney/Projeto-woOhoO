<?php
session_start();
include("conexao_db.php");
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT * FROM tb_usuarios WHERE email = '$email' AND senha = '$senha' ";
$result_id = mysqli_query($conexao, $sql);
if($result_id){
	$dados_usuario = mysqli_fetch_array($result_id);
	if(isset($dados_usuario["email"])){
		$_SESSION["id_usuario"] = $dados_usuario["id"];
		$_SESSION["usuario"] = $dados_usuario["usuario"];
		$_SESSION["email"] = $dados_usuario["email"];
		$_SESSION["senha"] = $dados_usuario["senha"];
		header("Location: home.php");
	}else{
		header("Location: index.php?erro=1");
	}
}else{
	echo "Erro ao tentar procurar usuario, favor entrar em contato com admin do site!";
}
?>
