<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div style="background-color:#E0FFFF;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Visualizar Perfil?</h4>
      </div>
      <form role="form" action="perfil_usuario.php" method="post">
        <div class="modal-body" align="center">
          <div class="form-group">
            <div style="font-family: 'Shadows Into Light', cursive; color:#9400D3; font-size:30px;"><input type="text" id="usuario_perfil" style="border:none; background:none; text-align:center" readonly /></div>
          </div>
          <div class="form-group">
            <div><input type="text" id="email_perfil" style="border:none; background:none; text-align:center" readonly /></div>
          </div>
          <div class="form-group">
            <div style="display:none"><input type="text" name="id_usuario" id="id_perfil" required readonly /></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" >Visualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>