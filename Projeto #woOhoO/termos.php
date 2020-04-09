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
                     <span><strong>Atualização de nossos Termos</strong></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p>
                      Trabalhamos constantemente para aperfeiçoar nossos serviços e desenvolver novos recursos com o objetivo de melhorar nossos Produtos para você e para nossa comunidade. Como resultado, poderemos atualizar estes Termos periodicamente para que eles reflitam de forma precisa nossos serviços e práticas. Salvo quando a lei estabelecer o contrário, você será notificado antes de alterarmos estes Termos e terá a oportunidade de analisá-los antes que entrem em vigor. Uma vez que os Termos atualizados entrem em vigor, você estará vinculado a eles se continuar usando nossos Produtos.
                      Esperamos que você continue usando nossos Produtos, mas se não concordar com nossos Termos atualizados e não quiser mais fazer parte da comunidade do <strong>WoOhoO</strong>, você poderá excluir sua conta a qualquer momento.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" style="background:#FF0000" role="tab" id="headingTwo">
                  <h4 class="panel-title" align="center">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     <span><strong>Limites da responsabilidade</strong></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p>
                      Trabalhamos continuamente para fornecer os melhores Produtos possíveis e especificar diretrizes claras para todos que os utilizam. Nossos Produtos, no entanto, são fornecidos “no estado em que se encontram”, e não damos nenhuma garantia de que eles sempre serão seguros, ou estarão livres de erros, ou de que funcionarão sem interrupções, atrasos ou imperfeições. No limite permitido por lei, também nos EXIMIMOS DE TODAS AS GARANTIAS, EXPLÍCITAS OU IMPLÍCITAS, INCLUSIVE AS GARANTIAS IMPLÍCITAS DE COMERCIABILIDADE, ADEQUAÇÃO A UMA DETERMINADA FINALIDADE, TÍTULO E NÃO VIOLAÇÃO. Não controlamos nem orientamos o que as pessoas e terceiros fazem ou dizem e não somos responsáveis pela conduta deles (seja online ou offline) ou por qualquer conteúdo que compartilham (inclusive conteúdo ofensivo, inadequado, obsceno, ilegal ou questionável).
                      Não podemos prever quando problemas poderão decorrer de nossos Produtos. Sendo assim, nossa responsabilidade é limitada à máxima extensão permitida pela lei aplicável e, sob nenhuma circunstância, seremos responsáveis perante você por qualquer perda de lucros, receitas, informações ou dados, ou, ainda, por danos eventuais, especiais, indiretos, exemplares, punitivos ou acidentais decorrentes de ou relativos a estes Termos ou aos Produtos do <strong>WoOhoO</strong>, ainda que tenhamos sido avisados da possibilidade de tais danos.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer" style="background:#000; margin-top:310px; height:140px;">
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
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>