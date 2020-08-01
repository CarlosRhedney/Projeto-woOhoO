<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
include("select_tabelas.php");
$sql = " SELECT DATE_FORMAT(p.data_inclusao, '%d %b %Y %T') AS data_inclusao_format, p.post, p.id_post, t.usuario, t.id FROM post AS p JOIN tb_usuarios AS t ON (p.id_usuario = t.id) WHERE id_usuario = $id_usuario OR id_usuario IN ( SELECT seguindo_id_usuario FROM usuarios_seguidores WHERE id_usuario = $id_usuario) ORDER BY data_inclusao DESC ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		echo '<div class="list-group-item">';
		echo '<h4 class="list-group-item-heading"><img src="img/img_perfil/'.$registro["usuario"].'/'.$nome.'" class="img-circle" style="width:30px"/>'.$registro['usuario'].' <small> - '.$registro['data_inclusao_format'].'</small></h4>';
		echo "<p class='list-group-item-text pull-right' style='margin-top:-40px; margin-right:-10px'>";
		echo "<button type='button' style='border:none' class='btn btn-default glyphicon glyphicon-trash btn_del' data-id_post='".$registro["id_post"]."'></button>";
		echo "<div class='clearfix'></div>";
		echo "</p>";
		echo "<br />";
		echo '<p class="list-group-item-text"><i><font style="font-size:17px">'.$registro['post'].'</i></p>';		
		echo '<hr />';
		echo "<div class='row' style='display:inline-block;'>";
		echo "<div class='col-xs-3'>";
		$curtindo_sn = isset($id_reacoes) && !empty($id_reacoes) ? 'S' : 'N';
		$curtindo = 'inline-block';
		$nao_curtindo = 'inline-block';
		if($curtindo_sn == 'N'){
			$nao_curtindo = 'none';
		}else{
			$curtindo = 'none';
		}
		echo "<button type='button' class='btn btn-default btn_curtir' id='curte_".$registro["id"]."' style='display:".$curtindo."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
		echo "<button type='button' class='btn btn-primary btn_deixar_curtir' id='nao_curte_".$registro["id"]."' style='display:".$nao_curtindo."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
		echo "</div>";
		echo "<div class='col-xs-3'>";
		$curtindo_sn = isset($id_nao_curtidas) && !empty($id_nao_curtidas) ? 'S' : 'N';
		$cur = 'inline-block';
		$nao_curte = 'inline-block';
		if($curtindo_sn == 'N'){
			$nao_curte = 'none';
		}else{
			$cur = 'none';
		}
		echo "<button type='button' class='btn btn-default btn_nao_curtiu' id='nao_cur_".$registro["id"]."' style='display:".$cur."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
        echo "<button type='button' class='btn btn-info btn_deixar_nao_curtir' id='deixar_nao_curte_".$registro["id"]."' style='display:".$nao_curte."'  data-id_usuario='".$registro["id"]."''><span class='glyphicon glyphicon-thumbs-down'></span></button><br />";
        echo "</div>";
        echo "<div class='col-xs-3'>";
        $curtindo_sn = isset($id_favorito) && !empty($id_favorito) ? 'S' : 'N';
		$favorito = 'inline-block';
		$nao_favorito = 'inline-block';
		if($curtindo_sn == 'N'){
			$nao_favorito = 'none';
		}else{
			$favorito = 'none';
		}
        echo "<button type='button' class='btn btn-default btn_favorito' id='favorito_".$registro["id"]."' style='display:".$favorito."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-star-empty'></span></button>";
        echo "<button type='button' class='btn btn-warning btn_deixar_favorito' id='deixar_favorito_".$registro["id"]."' style='display:".$nao_favorito."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-star-empty'></span></button><br />";
        echo "</div>";
        echo "<div class='col-xs-3'>";
        $curtindo_sn = isset($id_amei) && !empty($id_amei) ? 'S' : 'N';
		$amei = 'inline-block';
		$nao_amei = 'inline-block';
		if($curtindo_sn == 'N'){
			$nao_amei = 'none';
		}else{
			$amei = 'none';
		}
        echo "<button type='button' class='btn btn-default btn_amei' id='amei_".$registro["id"]."' style='display:".$amei."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
        echo "<button type='button' class='btn btn-danger btn_deixar_amei' id='deixar_amei_".$registro["id"]."' style='display:".$nao_amei."'  data-id_usuario='".$registro["id"]."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
        echo "</div>";
		echo "</div>";
		echo "<br />";
		echo '<button type="button" class="btn btn-default" id="coment" "><span class="glyphicon glyphicon-comment"></span></button>';
		echo "<div class='clearfix'></div>";
		echo '<form id="form_texto_comentario" style="display:none" class="input-group">';
		echo '<input type="text" id="texto_comentar" name="comentario" class="form-control" placeholder="comentar..." />';
		echo '<span class="input-group-btn">';
		echo '<button type="button" id="btn_comentar" class="btn btn-default"><span class="glyphicon glyphicon-send"></span></button>';
		echo '</span>';
		echo '</form>';
		echo "<br />";
		echo '<p id="comentario" class="" style="margin-top:-10px;"></p>';
		echo '</div>';
	}
}else{
	echo "Erro na consulta dos post's, favor entrar em contato com o admin do site";
}
?>