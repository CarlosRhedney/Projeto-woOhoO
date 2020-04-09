<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT us.*, t.* FROM tb_usuarios AS t LEFT JOIN usuarios_seguidores AS us ON (us.id_usuario = $id_usuario AND t.id = us.seguindo_id_usuario) WHERE t.id = seguindo_id_usuario AND t.id <> $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id)){
		echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['usuario'].'</strong> <small> - '.$registro['email'].'</small>';
                echo '<p class="list-group-item-text pull-right">';
                echo '<button type="button" class="btn btn-success btn_chat" id="btn_chat_'.$registro['id'].'" data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-share-alt"></span></button>';
                echo '</p>';
                echo "<div class='clearfix'></div>";
		echo '</a>';
	}
}else{
	echo "Erro na consulta de conversas, favor entrar em contato com o admin do site";
}
?>