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
    <script src="arquivo2.js"></script>
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
          <h4 class="navbar-brand"><span style="margin-left:-5px; font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:40px;">woOhoO!</span></h4>
          <a href="home.php"><span class="glyphicon glyphicon-home navbar-brand" style="margin-left:-20px; color:#00FF7F; padding-top:30px;"></span>
          </a>
          <a href="postagens.php"><span class="glyphicon glyphicon-bell navbar-brand" style="color:#00FF7F; padding-top:30px;"></span></a>
          <a href="procurar_pessoas.php"><span class="glyphicon glyphicon-user navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>
          <a href="chat.php"><span class="glyphicon glyphicon-envelope navbar-brand" style="color:#00FF7F;  padding-top:30px;"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="barra_nav">
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-top:10px;"><a href="logout.php"><span class="glyphicon glyphicon-off" style="color:#7c2;"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -40px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
            <div class="panel panel-default">
              <span class="glyphicon glyphicon-pushpin" style="padding-left:45px; color:#FF1493;"></span>
              <div style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:20px; width:90px; height:90px; background:#00FFFF; margin-left:5px; margin-top:-5px;" class="thumbnail" align="center">Sua foto aqui em breve!</div>
              <div class="panel-body" style="margin-top:-30px;">
                <?= $_SESSION["usuario"] ?>
                <hr />
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_curtir" id="curte_" style="display:'.$curtindo.' inline-block; margin-left:-20px"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                  <button type="button" class="btn btn-primary btn_deixar_curtir" id="nao_curte_" style="display:none; margin-left:-20px"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                  <br />
                  <span id="like">0</span>
                  <!--<span style="color:blue;" class="glyphicon glyphicon-thumbs-up"></span> <br /><span id="like">0</span>-->
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_nao_cutiu_" id="nao_cur_" style="display:'.$curtindo.' inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                  <button type="button" class="btn btn-info btn_deixar_nao_curtir_" id="deixar_nao_curte_" style="display:none; inline-block;"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                  <br />
                  <span id="deslike">0</span>
                  <!--<span style="color:blue;" class="glyphicon glyphicon-thumbs-down"></span> <br /><span id="deslike">0</span>-->
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default btn_favorito_" id="favorito_" style="display:'.$curtindo.' inline-block; margin-left:-20px"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-star-empty"></span></button>
                  <button type="button" class="btn btn-warning btn_deixar_favorito_" id="deixar_favorito_" style="display:none; inline-block; margin-left:-20px"  data-id_usuario="'.$registro['id'].'"><span class="glyphicon glyphicon-star-empty"></span></button>
                  <br />
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
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-8" style="margin-left: -30px;">
            <div class="panel panel-default">
              <div class="panel-body">
                <form class="input-group" id="form_texto_post">
                  <input type="text" id="texto_post" name="texto_post" class="form-control" placeholder="O que tá pegando?..." />
                  <span class="input-group-btn">
                    <button type="submit" id="botao_post" class="btn btn-default"><span class="glyphicon glyphicon-send"></span></button>
                  </span>
                </form>
              </div>
            </div>
            <div id="form_post" class="list-group" style="margin-top:-20px;"></div>
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