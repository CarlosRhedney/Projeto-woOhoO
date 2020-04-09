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