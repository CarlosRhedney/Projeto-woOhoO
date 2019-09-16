<?php
  $erroUsuario = isset($_GET["erroUsuario"]) ? $_GET["erroUsuario"] : 0;
  $erroEmail = isset($_GET["erroEmail"]) ? $_GET["erroEmail"] : 0;
  $succadastro = isset($_GET["succadastro"]) ? $_GET["succadastro"] : 0;
  $errocadastro = isset($_GET["errocadastro"]) ? $_GET["errocadastro"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>woOhoO</title>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="img/woohoo.png" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
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
          <h4 class="navbar-brand"><span style="font-family: 'Shadows Into Light', cursive; font-size:40px; color:#9400D3;">woOhoO!</span></h4>
        </div>
        <div class="collapse navbar-collapse" id="barra_nav">
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-top:10px;"><a href="index.php"><span style="color:#7c2;">Voltar para Home</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="article" style="margin-top:75px;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" style="background:#FF0000" role="tab" id="headingOne">
                  <h4 class="panel-title" align="center">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     <span><strong>Eventos WoOhoO:</strong></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p>
                      Where does it come from?
                      Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar-fixed-bottom" style="background:#000; height:110px;">
      <div class="container">
        <div class="row">
          <div style="display:inline-block;" class="col-xs-2">
            <h3><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3">woOhoO!</span></h3>
          </div>
          <div style="display:inline-block;" class="col-xs-5">
            <ul style="padding-top:20px;">
              <li><a href="eventos.php">Eventos</a></li>
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="CarlosRhedney/index.php" target="_blanck">Desenvolvedor</a></li>
            </ul>
          </div>
          <div style="display:inline-block;" class="col-xs-5">
            <ul style="padding-top:20px;">
              <li><a href="termos.php">Termos</a></li>
              <li><a href="seguranca_conta.php">Segurança da conta</a></li>
              <li><a href="ajuda.php">Ajuda</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>