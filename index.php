<?php
  $erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>woOhoO</title>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="img/woohoo.png" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
          <h4 class="navbar-brand"><span style="font-family: 'Shadows Into Light', cursive; font-size:40px; color:#9400D3">woOhoO!</span></h4>
        </div>
        <div class="collapse navbar-collapse" id="barra_nav">
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-top:10px;"><a href="inscreva_se.php"><span style="color:#7c2;">Inscreva-se</span></a></li>
            <li style="margin-top:10px;" class="<?= $erro == 1 ? 'open' : '' ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color:#7c2;">Minha Conta<span class="caret"></span></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-toggle="modal" data-target="#modal"><span style="color:#7c2;">Logar</span></a></li>
                <?php
                  if($erro == 1){
                    echo "<font color='red;'>Usuário e ou senha inválido(s)</font>";
                  }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="modal">
      <div class="modal-dialog">
        <div style="background-color:#E0FFFF;" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Efetuar login</h4>
          </div>
          <form role="form" action="verifica_login.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Digite seu email..." required />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha..." required />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:120px;">
      <div style="background:#E6E6FA;" class="jumbotron">
        <h1 align="center"><span style="font-family: 'Covered By Your Grace', cursive;">Bem Vindo ao</span> <span style="font-family: 'Shadows Into Light', cursive; font-size:90px; color:#9400D3">woOhoO!</span></h1>
        <br />
        <br />
        <h3 align="center"><span style="font-family: 'Rock Salt', cursive;">veja o que está acontecendo...</span></h3>
      </div>
    </div>
    <div class="article">
      <div class="container">
        <div class="row">
          <div class="clearfix">
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="clearfix">
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer" style="background:#000; margin-top:42px; height:140px;">
      <div class="container">
        <div class="row">
          <div style="display:inline-block;" class="col-xs-2">
            <h3><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3">woOhoO!</span></h3>
          </div>
          <div style="display:inline-block;" class="col-xs-5">
            <ul style="padding-top:20px;">
              <li><a href="#">Eventos</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="CarlosRhedney/index.php" target="_blanck">Desenvolvedor</a></li>
            </ul>
          </div>
          <div style="display:inline-block;" class="col-xs-5">
            <ul style="padding-top:20px;">
              <li><a href="termos.php">Termos</a></li>
              <li><a href="#">Segurança da conta</a></li>
              <li><a href="ajuda.php">Ajuda</a></li>
            </ul>
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