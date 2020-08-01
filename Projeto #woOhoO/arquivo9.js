function atualizaPostImagem(){
  $.ajax({
    url: "get_imagem_home.php",
    success: function(data){
      $("#post_imagem").html(data);
      $(".btn_del").click(function(){
      	let id_imagem = $(this).data("id_imagem");
      	$.ajax({
      		url: "delete_imagem_post.php",
      		method: "post",
      		data: {delete_post: id_imagem},
      		success: function(data){
      			alert("Postagem Deletada!");
      			atualizaPostImagem();
      		}
      	});
      });
      $("#imgs").click(function(){
        $("#imag").html(data);
      });
    }
  });
}
atualizaPostImagem();