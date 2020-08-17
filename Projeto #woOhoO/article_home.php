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
                echo "<button type='button' class='btn btn-default' id='curte_' style='display:".$curtindo."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo "<button type='button' class='btn btn-primary' id='nao_curte_' style='display:".$nao_curtindo."'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                echo "<br />";
                echo "<span id='like'>".$qtde_curtidas."</span>";
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
                echo "<button type='button' class='btn btn-default' id='nao_cur_' style='display:".$cur."'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
                echo "<button type='button' class='btn btn-info' id='deixar_nao_curte_' style='display:".$nao_curte."'><span class='glyphicon glyphicon-thumbs-down'></span></button><br />";
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
                echo "<button type='button' class='btn btn-default' id='favorito_' style='display:".$favorito."'><span class='glyphicon glyphicon-star-empty'></span></button>";
                echo "<button type='button' class='btn btn-warning' id='deixar_favorito_' style='display:".$nao_favorito."'><span class='glyphicon glyphicon-star-empty'></span></button><br />";
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
                echo "<button type='button' class='btn btn-default' id='amei_' style='display:".$amei."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<button type='button' class='btn btn-danger' id='deixar_amei_' style='display:".$nao_amei."'><span class='glyphicon glyphicon-heart-empty'></span></button>";
                echo "<br />";
                echo "<span id='teamo'>".$qtde_amei."</span>";
              ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default panel-body" style="margin-top:-20px">
          <?php
            $sql = " SELECT * FROM imagem_post WHERE id_usuario = $id_usuario ";
            $usuario = $_SESSION["usuario"];
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
          ?>
          <hr />
          <h4 align="center"><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:40px;">Jogos</span></h4>
          <a href="jogo/index.php" target="_blank" rel="noopener"><span><img style="width:50px" src="jogo/imagens/velha.jpg"></span></a>
          <a href="jogo2/index.php" target="_blank" rel="noopener"><span><img style="width:30px" src="jogo2/imagens/balao_azul_grande.png"></span></a>
          <hr />
          <h4 align="center"><span style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:40px;">Seus Seguidores</span></h4>
          <?php
            $sql = " SELECT id_usuario FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario ";
            $resultado_id = mysqli_query($conexao, $sql);
            if($resultado_id){
              $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
              $id_usuario = isset($registro["id_usuario"]) ? $registro["id_usuario"] : 0;
              $sql = " SELECT u.usuario, u.email, i.nome FROM tb_usuarios AS u LEFT JOIN imagens AS i ON (u.id = i.id_usuario) WHERE id = $id_usuario ";
              $resultado_id = mysqli_query($conexao, $sql);
              if($resultado_id){
                while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
                  $usuario = $registro["usuario"];
                  $email = $registro["email"];
                  $nome = $registro["nome"];
                  echo '<a href="#" class="list-group-item">';
                    echo '<img src="img/img_perfil/'.$usuario.'/'.$nome.'" class="img-rounded" style="width:30px"/> <strong>'.$usuario.'</strong> <small> - '.$email.'</small>';
                    echo "<div class='clearfix'></div>";
                  echo '</a>';
                }
              }
            }
          ?>
        </div>
      </div>
      <div class="col-xs-12" style="margin-top: -15px;">
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