<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT DATE_FORMAT(c.data_conversa, '%d %b %Y %T') AS data_conversa_format, c.conversa, t.usuario FROM conversas AS c JOIN tb_usuarios AS t ON (c.id_usuario = t.id) WHERE id_usuario = $id_usuario ORDER BY data_conversa ASC ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		echo '<a href="#" class="list-group-item">';
		echo '<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> - '.$registro['data_conversa_format'].'</small></h4>';
		echo "<br />";
		echo '<p class="list-group-item-text"><i><font style="font-size:17px">'.$registro['conversa'].'</i></p>';
		echo '</a>';
	}
}else{
	echo "Erro na consulta dos post's, favor entrar em contato com o admin do site";
}
?>