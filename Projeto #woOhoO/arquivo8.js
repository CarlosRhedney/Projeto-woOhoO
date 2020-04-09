function atualizaPostImagem(){
  $.ajax({
    url: "get_imagem_post.php",
    success: function(data){
      $("#post_imagem").html(data);
      $("#imgs").click(function(){
        $("#imag").html(data);
      });
    }
  });
}
atualizaPostImagem();