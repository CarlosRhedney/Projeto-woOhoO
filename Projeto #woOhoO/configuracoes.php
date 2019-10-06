<?php
  session_start();
  if(!isset($_SESSION["usuario"])){
    header("Location: index.php?erro=1");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>woOhoO</title>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="img/woohoo.png" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="jquery-2.2.1.js"></script>
    <script src="arquivo5.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#F5DEB3;">
    <nav class="navbar navbar-default navbar-fixed-top" id="nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" style="margin-top:20px; background-color:#fff;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra_nav">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h4 class="navbar-brand"><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:40px;">woOhoO!</span></h4>
          <a href="home.php"><span class="glyphicon glyphicon-home navbar-brand" style="margin-left:-25px; color:#00FF7F; padding-top:30px;"></span>
          </a>
          <a href="postagens.php"><span class="glyphicon glyphicon-bell navbar-brand" style="color:#00FF7F; padding-top:30px;"></span></a>
          <a href="procurar_pessoas.php"><span class="glyphicon glyphicon-user navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>
          <a href="chat.php"><span class="glyphicon glyphicon-envelope navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="barra_nav">
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-top:10px;"><a href="configuracoes.php"><span class="glyphicon glyphicon-cog" style="color:#7c2;"></span></a></li>
            <li style="margin-top:10px;"><a href="logout.php"><span class="glyphicon glyphicon-off" style="color:#7c2;"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="modal">
      <div class="modal-dialog">
        <div style="background-color:#E0FFFF;" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Trocar Nome de Usuário</h4>
          </div>
          <form id="form_nome">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="nome" name="usuario" placeholder="Digite o novo nome..." required />
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn_trocar_nome">Trocar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal2">
      <div class="modal-dialog">
        <div style="background-color:#E0FFFF;" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Excluir Conta?</h4>
          </div>
          <form>
            <div class="modal-body">
              <p>
                Deseja realmente excluir a sua conta no woOhoO?
                <br />
                Esta ação <strong>excluirá</strong> todos os seus <strong>Arquivos</strong>.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="btn_excluir">Excluir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -10px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="panel panel-default" align="center">
              <span class="glyphicon glyphicon-pushpin" style="padding-left:10px; color:#FF1493;"></span>
              <div style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:20px; width:100px; height:100px; background:#00FFFF; margin-left:0px; margin-top:-5px;" class="thumbnail" align="center">Sua foto aqui em breve!</div>
              <div class="panel-body" style="margin-top:-30px;">
                <?= $_SESSION["usuario"] ?>
                <br />
                <?= $_SESSION["email"] ?>
                <div class="clearfix"></div>
                <hr />
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_curtir" id="curte_" style="display:'.$curtindo.' inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                  <button type="button" class="btn btn-primary btn_deixar_curtir" id="nao_curte_" style="display:none;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                  <br />
                  <span id="like">0</span>
                  <!--<span style="color:blue;" class="glyphicon glyphicon-thumbs-up"></span> <br /><span id="like">0</span>-->
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_nao_cutiu_" id="nao_cur_" style="display:'.$curtindo.' inline-block"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                  <button type="button" class="btn btn-info btn_deixar_nao_curtir_" id="deixar_nao_curte_" style="display:none; inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-down"></span></button><br />
                  <span id="deslike">0</span>
                  <!--<span style="color:blue;" class="glyphicon glyphicon-thumbs-down"></span> <br /><span id="deslike">0</span>-->
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_favorito_" id="favorito_" style="display:'.$curtindo.' inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-star-empty"></span></button>
                  <button type="button" class="btn btn-warning btn_deixar_favorito_" id="deixar_favorito_" style="display:none; inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-star-empty"></span></button><br />
                  <span id="favorito">0</span>
                  <!--<span style="color:gold;" class="glyphicon glyphicon-star-empty"></span> <br /><span id="favorito">0</span>-->
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_amei_" id="amei_" style="display:'.$curtindo.' inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-heart-empty"></span></button>
                  <button type="button" class="btn btn-danger btn_deixar_amei_" id="deixar_amei_" style="display:none; inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-heart-empty"></span></button>
                  <br />
                  <span id="teamo">0</span>
                  <!--<span style="color:red;" class="glyphicon glyphicon-heart-empty"></span> <br /><span id="teamo">0</span>-->
                </div>
              </div>
            </div>
            <div class="panel panel-default pane-body" style="margin-top:-20px">
              <h4><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:40px;">Jogos</span></h4>
              <hr />
              <a href="jogo/index.php" target="_blanck"><span><img style="width:50px" src="jogo/imagens/velha.jpg"></span></a>
              <a href="jogo2/index.php" target="_blanck"><span><img style="width:30px" src="jogo2/imagens/balao_azul_grande.png"></span></a>
            </div>
          </div>
          <div class="col-xs-12" style="margin-top: -15px;">
            <div class="panel panel-default">
              <div class="panel-body" align="center">
                <div class="col-xs-6">
                  <button type="button" data-toggle="modal" data-target="#modal2" id="btn_delete" class="btn btn-danger">Deletar Conta</button>
                </div>
                <div class="col-xs-6">
                  <button type="button" data-toggle="modal" data-target="#modal" id="btn_nome" class="btn btn-warning">Trocar Nome</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>