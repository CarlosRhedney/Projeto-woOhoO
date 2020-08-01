<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
include("select_tabelas.php");
$sql = " SELECT DATE_FORMAT(i.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, i.nome, i.id_imagem, u.usuario FROM imagem_post AS i JOIN tb_usuarios AS u ON (u.id = i.id_usuario) WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id)){
		echo "<div class='list-group-item'>";
		echo "<h4 class='list-group-item-heading'><img src='img/img_perfil/".$registro["usuario"]."/".$nome."' class='img-circle' style='width:30px'/>".$registro["usuario"]." <small> - ".$registro["data_inclusao_formatada"]."</small></h4>";
		echo "<p class='list-group-item-text pull-right' style='margin-top:-40px; margin-right:-10px'>";
		echo "<button type='button' style='border:none' class='btn btn-default glyphicon glyphicon-trash btn_del' data-id_imagem='".$registro["id_imagem"]."'></button>";
		echo "<div class='clearfix'></div>";
		echo "</p>";
		// Ao invés de usar o 192.168.1.101 é possivel usar o localhost, porem para dispositivos moveis
		// as imagens nao abrem, ficam quebradas, estou usando assim a principio ate deixar online
		// acho que com o ip dinamico woohooo.ddns.net funcione sem a necessidade de 192.168... ou localhost
		// no banco de dados para guardar o caminho é só colocar http://localhost/testes2/img/ e o nome da imagem
		// aqui voce tira a parte do http://localhost/testes2/img/ e deixa só a parte do ".$registro["nome"]."
		// Aqui concatenei o ".$registro["usuario"]." para acessar uma pasta criada no insere_img_post, a qual faz referencia a pasta de imagens de cada usuario,
		// com o nome dos usuarios que guarda as imagens deles
		echo "<p class='list-group-item-text' align='center' data-toggle='modal' data-target='#modal2'><img src='img/".$registro["usuario"]."/".$registro["nome"]."' class='img-responsive img-thumbnail' id='imgs' style='width:700px'/></p>";
		echo "</div>";
	}
}else{
	echo "Erro na pesquisa por posts!";
}
?>