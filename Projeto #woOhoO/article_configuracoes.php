<div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -10px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default" align="center">
          <div class="panel-body">
            <div align="center" id="imagem_perfil" class="list-group"></div>
            <h4 style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:30px;"><?= $_SESSION["usuario"] ?></h4>
            <small><?= $_SESSION["email"] ?></small>
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