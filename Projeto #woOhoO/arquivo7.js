$(document).ready(function(){
  function atualizaPerfil(){
    $.ajax({
      url: "get_imagem_perfil.php",
      success: function(data){
        $("#imagem_perfil").html(data);
        $("#imgs2").click(function(){
          $("#img").html(data);
        });
      }
    });
  }
  atualizaPerfil();
});