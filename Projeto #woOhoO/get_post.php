<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT DATE_FORMAT(p.data_inclusao, '%d %b %Y %T') AS data_inclusao_format, p.post, p.id_post, t.usuario, t.id FROM post AS p JOIN tb_usuarios AS t ON (p.id_usuario = t.id) WHERE id_usuario = $id_usuario OR id_usuario IN ( SELECT seguindo_id_usuario FROM usuarios_seguidores WHERE id_usuario = $id_usuario) ORDER BY data_inclusao DESC ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		echo '<a href="#" class="list-group-item">';
		echo '<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> - '.$registro['data_inclusao_format'].'</small></h4>';
		echo "<p class='list-group-item-text pull-right'>";
		echo "<button type='button' style='border:none' class='btn btn-default glyphicon glyphicon-trash btn_del' data-id_post='".$registro["id_post"]."'></button>";
		echo "<div class='clearfix'></div>";
		echo "</p>";
		echo "<br />";
		echo '<p class="list-group-item-text"><i><font style="font-size:17px">'.$registro['post'].'</i></p>';		
		echo '<hr />';
		echo '<button type="button" class="btn btn-default" id="coment" "><span class="glyphicon glyphicon-share-alt"></span></button>';
		echo '<form id="form_texto_comentario" style="display:none" class="input-group">';
		echo '<input type="text" id="texto_comentar" name="comentario" class="form-control" placeholder="comentar..." />';
		echo '<span class="input-group-btn">';
		echo '<button type="button" id="btn_comentar" class="btn btn-default"><span class="glyphicon glyphicon-send"></span></button>';
		echo '</span>';
		echo '</form>';
		echo '</a>';
	}
}else{
	echo "Erro na consulta dos post's, favor entrar em contato com o admin do site";
}
?>
