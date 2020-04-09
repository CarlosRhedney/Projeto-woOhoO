<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " SELECT DATE_FORMAT(i.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, i.nome, u.usuario FROM imagem_post AS i JOIN tb_usuarios AS u ON (u.id = i.id_usuario) WHERE id_usuario = $id_usuario OR id_usuario IN (select seguindo_id_usuario from usuarios_seguidores where id_usuario = $id_usuario) ORDER BY data_inclusao DESC ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id)){
		echo "<a href='#' class='list-group-item'>";
		echo "<h4 class='list-group-item-heading'>".$registro["usuario"]." <small> - ".$registro["data_inclusao_formatada"]."</small></h4>";
		// Ao invés de usar o 192.168.1.101 é possivel usar o localhost, porem para dispositivos moveis
		// as imagens nao abrem, ficam quebradas, estou usando assim a principio ate deixar online
		// acho que com o ip dinamico woohooo.ddns.net funcione sem a necessidade de 192.168... ou localhost
		// no banco de dados para guardar o caminho é só colocar http://localhost/testes2/img/ e o nome da imagem
		// aqui voce tira a parte do http://localhost/testes2/img/ e deixa só a parte do ".$registro["nome"]."
		// Aqui concatenei o ".$registro["usuario"]." para acessar uma pasta criada no insere_img_post, a qual faz referencia a pasta de imagens de cada usuario,
		// com o nome dos usuarios que guarda as imagens deles
		echo "<p class='list-group-item-text' align='center'><img src='http://192.168.1.100:8088/img/".$registro["usuario"]."/".$registro["nome"]."' class='img-responsive img-thumbnail' id='imgs' style='width:700px'/></p>";
		echo "</a>";
	}
}else{
	echo "Erro na pesquisa por posts!";
}
?>