<div class="article" style="margin-top:75px;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <form role="form" action="insere_usuario_db.php" method="post" id="cadastrar_usuario">
          <h2><span style="font-family: 'Cabin Sketch', cursive;">Inscreva-se já.</span></h2>
          <br />
          <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required />
            <?php
            if($erroUsuario){
              echo "<font color='gold;'>Usuário já cadastrado!</font>";
            }
            ?>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required />
            <?php
            if($erroEmail){
              echo "<font color='gold;'>E-mail já cadastrado!</font>";
            }
            ?>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha" required />
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="date" required />
          </div>
          <div class="form-check" style="display:inline-block; margin-right:40px;">
            <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F" required />
            <label class="form-check-label" for="sexoF"><span style="font-family: 'Lovers Quarrel', cursive; font-size:50px">Feminino</span></label>
          </div>
          <div class="form-check" style="display:inline-block;">
            <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M" required />
            <label class="form-check-label" for="sexoM"><span style="font-family: 'Lovers Quarrel', cursive; font-size:50px">Masculino</span></label>
          </div>
          <?php
          echo  "<br />";
          if($succadastro){
            echo "<font color='gold;'>Usuário cadastrado com sucesso!</font>";
          }else if($errocadastro){
            echo "<font color='gold;'>Erro ao tentar cadastrar usuário, favor entrar em contato com o admin do site!</font>";
          }
          ?>
          <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
        </form>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>
</div>