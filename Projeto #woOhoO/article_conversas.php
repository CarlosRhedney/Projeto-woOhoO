<div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -40px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div align="center" id="imagem_perfil" data-toggle="modal" data-target="#modal" class="list-group"></div>
            <h4 style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:25px;" align="center"><?= $_SESSION["usuario"] ?></h4>
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
        </div>
        <div id="conversas" class="list-group" style="margin-top:-22px;"></div>
      </div>
    </div>
  </div>
</div>