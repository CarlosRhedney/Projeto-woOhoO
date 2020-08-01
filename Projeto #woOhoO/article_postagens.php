<div class="article" style="margin-top:75px; margin-left: -10px; margin-right: -40px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div align="center" id="imagem_perfil" class="list-group"></div>
            <h4 style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:25px;" align="center"><?= $_SESSION["usuario"] ?></h4>
            <div>
              <form action="insere_img_perfil.php" method="post" enctype="multipart/form-data" class="input-group">
                <button type="button" class="glyphicon glyphicon-camera btn btn-warning" style="font-size:15px"><input title=" " type="file" name="imagem" style="position: absolute; left: 0; top: 0; opacity: 0;" required /></button>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-xs">Salvar</button>
                </span>
              </form>
            </div>
            <hr />
            <div class="col-xs-3">
              <?php
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
                echo "<button type='button' class='btn btn-default btn_curtir' id='curte_' style='display:".$curtindo."; margin-left:-20px'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo "<button type='button' class='btn btn-primary btn_deixar_curtir' id='nao_curte_' style='display:".$nao_curtindo."; margin-left:-20px'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo '<br />';
                echo '<span id="like">'.$qtde_curtidas.'</span>';
              ?>
            </div>
            <div class="col-xs-3">
              <?php
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
                echo "<button type='button' class='btn btn-default btn_nao_curtiu' id='nao_cur_' style='display:".$cur.";'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
                echo "<button type='button' class='btn btn-info btn_deixar_nao_curtir' id='deixar_nao_curte_' style='display:".$nao_curte.";'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
                echo "<br />";
                echo "<span id='deslike'>".$qtde_nao_curtidas."</span>";
              ?>
            </div>
            <div class="col-xs-3">
              <?php
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
                echo "<button type='button' class='btn btn-default btn_favorito' id='favorito_' style='display:".$favorito."; margin-left:-20px'><span class='glyphicon glyphicon-star-empty'></span></button>";
                echo "<button type='button' class='btn btn-warning btn_deixar_favorito' id='deixar_favorito_' style='display:".$nao_favorito."; margin-left:-20px'><span class='glyphicon glyphicon-star-empty'></span></button>";
                echo "<br />";
                echo "<span id='favorito'>".$qtde_favoritos."</span>";
              ?>
            </div>
            <div class="col-xs-3">
              <?php
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
                echo "<button type='button' class='btn btn-default btn_amei' id='amei_' style='display:".$amei.";'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<button type='button' class='btn btn-danger btn_deixar_amei' id='deixar_amei_' style='display:".$nao_amei."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<br />";
                echo "<span id='teamo'>".$qtde_amei."</span>";
              ?>
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
            <form action="insere_img_post.php" method="post" enctype="multipart/form-data" class="input-group">
              <button type="button" class="glyphicon glyphicon-camera btn btn-warning" style="font-size:15px"><input title=" " type="file" name="imagem" style="position: absolute; left: 0; top: 0; opacity: 0;" required /></button>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-xs">Salvar</button>
              </span>
            </form>
          </div>
        </div>
        <div id="post_imagem" class="list-group" style="margin-top:-20px;"></div>
        <div id="form_post" class="list-group" style="margin-top:-20px;"></div>
      </div>
    </div>
  </div>
</div>