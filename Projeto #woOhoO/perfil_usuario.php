<?php
session_start();
include("conexao_db.php");
$id_usuario = $_POST["id_usuario"];
$con = new db();
$conexao = $con->conecta_mysql();
include("select_tabelas.php");
$sql = " SELECT COUNT(*) AS qtde_curtidas FROM curtidas WHERE curtindo_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_curtidas = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_curtidas = $registro["qtde_curtidas"];
}

$sql = " SELECT COUNT(*) AS qtde_nao_curtidas FROM naocurtidas WHERE nao_curtindo_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_nao_curtidas = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_nao_curtidas = $registro["qtde_nao_curtidas"];
}

$sql = " SELECT COUNT(*) AS qtde_favoritos FROM favorito WHERE favorito_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_favoritos = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_favoritos = $registro["qtde_favoritos"];
}

$sql = " SELECT COUNT(*) AS qtde_amei FROM amei WHERE amei_id_usuario = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
$qtde_amei = 0;
if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  $qtde_amei = $registro["qtde_amei"];
}
$sql = " SELECT * FROM tb_usuarios WHERE id = $id_usuario ";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	if(isset($registro["id"])){
		$id_usuario_perfil = $registro["id"];
		echo '<!DOCTYPE html>';
		echo '<html lang="pt-br">';
		echo '<head>';
		echo '<title>woOhoO</title>';
		echo '<meta charset="UTF-8" />';
		echo '<link rel="icon" type="icon" href="img/woohoo.png" />';
		echo '<link rel="stylesheet" type="text/css" href="estilo.css" />';
		echo '<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
		echo '<script src="jquery-2.2.1.js"></script>';
		echo '<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->';

		echo '<!-- Bootstrap -->';
		echo '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />';

		echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
		echo "<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->";
		echo '<!--[if lt IE 9]>';
		echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>';
		echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
		echo '<![endif]-->';
		echo '</head>';

		echo '<body style="background:#F5DEB3; overflow-y:hidden">';
		echo '<nav class="navbar navbar-default navbar-fixed-top" id="nav">';
		echo '<div class="container">';
		echo '<div class="navbar-header">';
		echo '<button type="button" style="margin-top:20px; background-color:#fff;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra_nav">';
		echo '<span class="sr-only"></span>';
		echo '<span class="icon-bar"></span>';
		echo '<span class="icon-bar"></span>';
		echo '<span class="icon-bar"></span>';
		echo '</button>';
		echo '<h4 class="navbar-brand"><span style="font-family: Shadows Into Light, cursive; color:gold; font-size:40px;">w!</span></h4>';
		echo '<a href="home.php"><span class="glyphicon glyphicon-home navbar-brand" style="margin-left:-25px; color:#00FF7F; padding-top:30px;"></span>';
		echo '</a>';
		echo '<a href="postagens.php"><span class="glyphicon glyphicon-bell navbar-brand" style="color:#00FF7F; padding-top:30px;"></span></a>';
		echo '<a href="procurar_pessoas.php"><span class="glyphicon glyphicon-user navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>';
		echo '<a href="chat.php"><span class="glyphicon glyphicon-comment navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>';
		echo '</div>';
		echo '<div class="collapse navbar-collapse" id="barra_nav">';
		echo '<ul class="nav navbar-nav navbar-right">';
		echo '<li style="margin-top:10px;"><a href="configuracoes.php"><span class="glyphicon glyphicon-cog" style="color:#7c2;"></span></a></li>';
		echo '<li style="margin-top:10px;"><a href="logout.php"><span class="glyphicon glyphicon-off" style="color:#7c2;"></span></a></li>';
		echo '</ul>';
		echo '</div>';
		echo '</div>';
		echo '</nav>';

		echo '<div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -10px;">';
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<div class="col-xs-12">';
		echo '<div class="panel panel-default" align="center">';
		echo '<div class="panel-body">';
		$sql = " SELECT u.usuario, u.email, i.nome FROM tb_usuarios AS u LEFT JOIN imagens AS i ON (u.id = i.id_usuario) WHERE id = $id_usuario_perfil ";
			$resultado_id = mysqli_query($conexao, $sql);
			if($resultado_id){
				while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
					$usuario = $registro["usuario"];
					$email = $registro["email"];
					$nome = $registro["nome"];
					echo '<a href="#" class="list-group-item">';
					echo "<p class='list-group-item-text'><img src='img/img_perfil/".$usuario."/".$registro["nome"]."' class='img-rounded img-responsive' id='imgs2' data-toggle='modal' data-target='#modal' style='width:200px'/></p>";
					echo "<div class='clearfix'></div>";
					echo '</a>';
				}
			}
		echo '<h4 style="font-family: Shadows Into Light, cursive; color:#9400D3; font-size:30px;">'.$usuario.'</h4>';
		echo '<small>'.$email.'</small>';
		echo '<div class="clearfix"></div>';
		echo '<hr />';
		echo '<div class="col-xs-3">';
                $sql = " SELECT id_reacoes FROM curtidas WHERE curtindo_id_usuario = $id_usuario ";
                $resultado_id = mysqli_query($conexao, $sql);
                if($resultado_id){
                  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
                  $id_reacoes = isset($registro["id_reacoes"]);
                }
                $curtindo_sn = isset($id_reacoes) && !empty($id_reacoes) ? 'S' : 'N';
                $curtindo = 'inline-block';
                $nao_curtindo = 'inline-block';
                if($curtindo_sn == 'N'){
                  $nao_curtindo = 'none';
                }else{
                  $curtindo = 'none';
                }
                echo "<button type='button' class='btn btn-default btn_curtir' id='curte_' style='display:".$curtindo."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo "<button type='button' class='btn btn-primary btn_deixar_curtir' id='nao_curte_' style='display:".$nao_curtindo."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo "<br />";
                echo "<span id='like'>".$qtde_curtidas."</span>";
		echo '</div>';
		echo '<div class="col-xs-3">';
				$sql = " SELECT id_nao_curtidas FROM naocurtidas WHERE nao_curtindo_id_usuario = $id_usuario ";
                $resultado_id = mysqli_query($conexao, $sql);
                if($resultado_id){
                  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
                  $id_nao_curtidas = isset($registro["id_nao_curtidas"]);
                }
                $curtindo_sn = isset($id_nao_curtidas) && !empty($id_nao_curtidas) ? 'S' : 'N';
                $cur = 'inline-block';
                $nao_curte = 'inline-block';
                if($curtindo_sn == 'N'){
                  $nao_curte = 'none';
                }else{
                  $cur = 'none';
                }
                echo "<button type='button' class='btn btn-default btn_nao_curtiu' id='nao_cur_' style='display:".$cur."'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
                echo "<button type='button' class='btn btn-info btn_deixar_nao_curtir' id='deixar_nao_curte_' style='display:".$nao_curte."'><span class='glyphicon glyphicon-thumbs-down'></span></button><br />";
                echo "<span id='deslike'>".$qtde_nao_curtidas."</span>";
		echo '</div>';
		echo '<div class="col-xs-3">';
				$sql = " SELECT id_favorito FROM favorito WHERE favorito_id_usuario = $id_usuario ";
                $resultado_id = mysqli_query($conexao, $sql);
                if($resultado_id){
                  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
                  $id_favorito = isset($registro["id_favorito"]);
                }
                $curtindo_sn = isset($id_favorito) && !empty($id_favorito) ? 'S' : 'N';
                $favorito = 'inline-block';
                $nao_favorito = 'inline-block';
                if($curtindo_sn == 'N'){
                  $nao_favorito = 'none';
                }else{
                  $favorito = 'none';
                }
                echo "<button type='button' class='btn btn-default btn_favorito_' id='favorito_' style='display:".$favorito."'><span class='glyphicon glyphicon-star-empty'></span></button>";
                echo "<button type='button' class='btn btn-warning btn_deixar_favorito_' id='deixar_favorito_' style='display:".$nao_favorito."'><span class='glyphicon glyphicon-star-empty'></span></button><br />";
                echo "<span id='favorito'>".$qtde_favoritos."</span>";
		echo '</div>';
		echo '<div class="col-xs-3">';
				$sql = " SELECT id_amei FROM amei WHERE amei_id_usuario = $id_usuario ";
                $resultado_id = mysqli_query($conexao, $sql);
                if($resultado_id){
                  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
                  $id_amei = isset($registro["id_amei"]);
                }
                $curtindo_sn = isset($id_amei) && !empty($id_amei) ? 'S' : 'N';
                $amei = 'inline-block';
                $nao_amei = 'inline-block';
                if($curtindo_sn == 'N'){
                  $nao_amei = 'none';
                }else{
                  $amei = 'none';
                }
                echo "<button type='button' class='btn btn-default btn_amei_' id='amei_' style='display:".$amei."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<button type='button' class='btn btn-danger btn_deixar_amei_' id='deixar_amei_' style='display:".$nao_amei."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<br />";
                echo "<span id='teamo'>".$qtde_amei."</span>";
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<div class="panel panel-default panel-body" style="margin-top:-20px">';
			$sql = " SELECT * FROM imagem_post WHERE id_usuario = $id_usuario_perfil ";
            $resultado_id = mysqli_query($conexao, $sql);
            if($resultado_id){
                echo '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
                  echo '<ol class="carousel-indicators">';
                    echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                  echo '</ol>';
                  echo '<div class="carousel-inner" role="listbox">';
                  while($registro = mysqli_fetch_array($resultado_id)){
                    $nome = $registro["nome"];
                    echo '<div align="center" class="item active">';
                      echo '<img src="img/'.$usuario.'/'.$nome.'" class="img-thumbnail img-responsive" style="width:200px; display:inline-block" />';
                    echo '</div>';
                    echo '<div align="center" class="item">';
                      echo '<img src="img/'.$usuario.'/'.$nome.'" class="img-thumbnail img-responsive" style="width:200px; display:inline-block" />';
                    echo '</div>';
                    echo '<div align="center" class="item">';
                      echo '<img src="img/'.$usuario.'/'.$nome.'" class="img-thumbnail img-responsive" style="width:200px; display:inline-block" />';
                    echo '</div>';
                  }
                  echo '</div>';
                  echo '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">';
                    echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
                    echo '<span class="sr-only">Previous</span>';
                  echo '</a>';
                  echo '<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">';
                    echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
                    echo '<span class="sr-only">Next</span>';
                  echo '</a>';
                echo '</div>';
            }
		echo '<hr />';
		echo '<h4><span style="font-family: Shadows Into Light, cursive; color:#9400D3; font-size:40px;">Jogos</span></h4>';
		echo '<a href="jogo/index.php" target="_blank" rel="noopener"><span><img style="width:50px" src="jogo/imagens/velha.jpg"></span></a>';
		echo '<a href="jogo2/index.php" target="_blank" rel="noopener"><span><img style="width:30px" src="jogo2/imagens/balao_azul_grande.png"></span></a>';
		echo '<hr />';
		echo '<h4 align="center"><span style="font-family: Shadows Into Light, cursive; color:#9400D3; font-size:40px;">Seguidores</span></h4>';
		$sql = " SELECT id_usuario FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario ";
		$resultado_id = mysqli_query($conexao, $sql);
		if($resultado_id){
			$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
			$id_usuario = $registro["id_usuario"];
			$sql = " SELECT u.usuario, u.email, i.nome FROM tb_usuarios AS u LEFT JOIN imagens AS i ON (u.id = i.id_usuario) WHERE id = $id_usuario ";
			$resultado_id = mysqli_query($conexao, $sql);
			if($resultado_id){
				while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
					$usuario = $registro["usuario"];
					$email = $registro["email"];
					$nome2 = $registro["nome"];
					echo '<a href="#" class="list-group-item">';
					echo '<img src="img/img_perfil/'.$usuario.'/'.$nome2.'" class="img-rounded" style="width:30px"/> <strong>'.$usuario.'</strong> <small> - '.$email.'</small>';
					echo "<div class='clearfix'></div>";
					echo '</a>';
				}
			}
		}
		echo '</div>';
		echo '</div>';
		echo '<div class="col-xs-12" style="margin-top: -15px;">';
		$sql = " SELECT DATE_FORMAT(i.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, i.nome, i.id_imagem, u.usuario FROM imagem_post AS i JOIN tb_usuarios AS u ON (u.id = i.id_usuario) WHERE id_usuario = $id_usuario_perfil ORDER BY data_inclusao DESC ";
		$resultado_id = mysqli_query($conexao, $sql);
		if($resultado_id){
			while($registro = mysqli_fetch_array($resultado_id)){
				echo "<div class='list-group-item'>";
				echo "<h4 class='list-group-item-heading'><img src='img/img_perfil/".$registro["usuario"]."/".$nome."' class='img-circle' style='width:30px'/>".$registro["usuario"]." <small> - ".$registro["data_inclusao_formatada"]."</small></h4>";
				echo "<p class='list-group-item-text pull-right' style='margin-top:-40px; margin-right:-10px'>";
				echo "<button type='button' style='border:none' class='btn btn-default glyphicon glyphicon-trash btn_del' data-id_imagem='".$registro["id_imagem"]."'></button>";
				echo "<div class='clearfix'></div>";
				echo "</p>";
				echo "<p class='list-group-item-text' align='center' data-toggle='modal' data-target='#modal2'><img src='img/".$registro["usuario"]."/".$registro["nome"]."' class='img-responsive img-thumbnail' id='imgs' style='width:700px'/></p>";
				echo "</div>";
			}
		}else{
			echo "Erro na pesquisa por posts!";
		}

		$sql = " SELECT DATE_FORMAT(p.data_inclusao, '%d %b %Y %T') AS data_inclusao_format, p.post, p.id_post, t.usuario FROM post AS p JOIN tb_usuarios AS t ON (p.id_usuario = t.id) WHERE id_usuario = $id_usuario_perfil ORDER BY data_inclusao DESC ";
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
				echo '</div>';
			}
		}else{
			echo "Erro na consulta dos post's, favor entrar em contato com o admin do site";
		}
		echo '<div id="post_imagem" class="list-group" style="margin-top:-20px;"></div>';
		echo '<div id="form_post" class="list-group" style="margin-top:-20px;"></div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
		echo '<!-- Include all compiled plugins (below), or include individual files as needed -->';
		echo '<script src="bootstrap/js/bootstrap.min.js"></script>';
		echo '</body>';
		echo '</html>';
	}
}else{
	echo "Erro na consulta do perfil, favor entrar em contato com o admin do site";
}
?>