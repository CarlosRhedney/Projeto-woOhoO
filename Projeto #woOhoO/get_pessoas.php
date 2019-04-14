<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$nome_pessoa = $_POST["nome_pessoa"];
$con = new db();
$conexao = $con->conecta_mysql();
$sql = " SELECT us.*, t.* FROM tb_usuarios AS t LEFT JOIN usuarios_seguidores AS us ON (us.id_usuario = $id_usuario AND t.id = us.seguindo_id_usuario) WHERE t.usuario like '%$nome_pessoa%' AND t.id <> $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['usuario'].'</strong> <small> - '.$registro['email'].'</small>';
                echo '<p class="list-group-item-text pull-right">';
                		$seguindo_sn = isset($registro['id_usuario_seguidor']) && !empty($registro['id_usuario_seguidor']) ? 'S' : 'N';
                		$seguindo = 'block';
                		$nao_seguindo = 'block';
                		if($seguindo_sn == 'N'){
                			$nao_seguindo = 'none';
                		}else{
                			$seguindo = 'none';
                		}
                echo '<button type="button" class="btn btn-default btn_seguir" id="segue_'.$registro['id'].'" style="display:'.$seguindo.'"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-bookmark"></span></button>';
                echo '<button type="button" class="btn btn-danger btn_deixar_seguir" id="nao_segue_'.$registro['id'].'" style="display:'.$nao_seguindo.'" data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-bookmark"></span></button>';
                echo '</p>';
                echo "<div class='clearfix'></div>";
		echo '</a>';
	}
}else{
	echo "Erro na consulta de pessoas, favor entrar em contato com o admin do site";
}
?>