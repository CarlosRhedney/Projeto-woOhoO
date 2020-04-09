<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div style="background-color:#E0FFFF;" class="modal-content">
      <form role="form" action="verifica_login.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Efetuar login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Digite seu email..." required />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Digite sua senha..." required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>