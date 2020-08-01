<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("Location: index.php?erro=1");
}
include("conexao_db.php");
$id_usuario = $_SESSION["id_usuario"];
$usuario = $_SESSION["usuario"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " SELECT * FROM imagens WHERE id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
    while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        echo "<a href='#' class='list-group-item'>";
		echo "<h4 class='list-group-item-heading'></h4>";
		// Ao invés de usar o 192.168.1.101 é possivel usar o localhost, porem para dispositivos moveis
		// as imagens nao abrem, ficam quebradas, estou usando assim a principio ate deixar online
		// acho que com o ip dinamico woohooo.ddns.net funcione sem a necessidade de 192.168... ou localhost
		// no banco de dados para guardar o caminho é só colocar http://localhost/testes2/img/ e o nome da imagem
		// aqui voce tira a parte do http://localhost/testes2/img/ e deixa só a parte do ".$registro["nome"]."
		// Dentro de img diretorio existente na aplicaçao, foi criado o diretorio img_perfil,
		// Criado especificamente para guardar a imagem de perfil dos usuarios
		// Aqui concatenei o ".$usuario." para acessar uma pasta criada no insere_img, a qual faz referencia a pasta de imagens de cada usuario,
		// com o nome dos usuarios que guarda as imagens deles
		echo "<p class='list-group-item-text'><img src='img/img_perfil/".$usuario."/".$registro["nome"]."' class='img-rounded img-responsive' id='imgs2' data-toggle='modal' data-target='#modal' style='width:200px'/></p>";
		echo "</a>";
    }
}
?>