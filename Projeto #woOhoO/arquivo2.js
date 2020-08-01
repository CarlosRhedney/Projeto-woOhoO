$(document).ready(function(){
  alert("Olá seja bem vindo, nesta página aparecerão todas as suas postagens e as postagens de quem você está seguindo!");
  $("#botao_post").click(function(){
    if($("#texto_post").val().length > 0){
      $.ajax({
        url: "inclui_post.php",
        method: "post",
        data: $("#form_texto_post").serialize(),
        success: function(data){
          $("#texto_post").val("");
          atualizaPost();
          atualizaPostImagem();
        }
      });
    }
  });

  function atualizaPost(){
    $.ajax({
      url: "get_post.php",
      success: function(data){
        $("#form_post").html(data);
        $(".btn_del").click(function(){
          let id_post = $(this).data("id_post");
          $.ajax({
            url: "delete_post.php",
            method: "post",
            data: {delete_post: id_post},
            success: function(data){
              alert("Postagem Deletada!");
              atualizaPost();
            }
          });
        });
        $(".btn_curtir").click(function(){
          let vot_fim = this.id;
          pontuacao(+1); let id_usuario = $(this).data("id_usuario");
          $("#curte_").hide();
          $("#nao_curte_").show();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let like = document.getElementById("like").innerHTML;
            like = parseInt(like);
            like = like + acao;
            document.getElementById("like").innerHTML = like;
          }
        });
        $(".btn_deixar_curtir").click(function(){
          let vot_fim = this.id;
          pontuacao(+1);
          $("#curte_").show();
          $("#nao_curte_").hide();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let like = document.getElementById("like").innerHTML;
            like = parseInt(like);
            like = like - acao;
            document.getElementById("like").innerHTML = like;
          }
        });
        $(".btn_nao_curtiu").click(function(){
          let vot_fim = this.id;
          pontuacao(+1); let id_usuario = $(this).data("id_usuario");
          $("#nao_cur_").hide();
          $("#deixar_nao_curte_").show();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let deslike = document.getElementById("deslike").innerHTML;
            deslike = parseInt(deslike);
            deslike = deslike + acao;
            document.getElementById("deslike").innerHTML = deslike;
          }
        });
        $(".btn_deixar_nao_curtir").click(function(){
          let vot_fim = this.id;
          pontuacao(+1);
          $("#nao_cur_").show();
          $("#deixar_nao_curte_").hide();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let deslike = document.getElementById("deslike").innerHTML;
            deslike = parseInt(deslike);
            deslike = deslike - acao;
            document.getElementById("deslike").innerHTML = deslike;
          }
        });
        $(".btn_favorito").click(function(){
          let vot_fim = this.id;
          pontuacao(+1); let id_usuario = $(this).data("id_usuario");
          $("#favorito_").hide();
          $("#deixar_favorito_").show();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let favorito = document.getElementById("favorito").innerHTML;
            favorito = parseInt(favorito);
            favorito = favorito + acao;
            document.getElementById("favorito").innerHTML = favorito;
          }
        });
        $(".btn_deixar_favorito").click(function(){
          let vot_fim = this.id;
          pontuacao(+1);
          $("#favorito_").show();
          $("#deixar_favorito_").hide();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let favorito = document.getElementById("favorito").innerHTML;
            favorito = parseInt(favorito);
            favorito = favorito - acao;
            document.getElementById("favorito").innerHTML = favorito;
          }
        });
        $(".btn_amei").click(function(){
          let vot_fim = this.id;
          pontuacao(+1); let id_usuario = $(this).data("id_usuario");
          $("#amei_").hide();
          $("#deixar_amei_").show();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let teamo = document.getElementById("teamo").innerHTML;
            teamo = parseInt(teamo);
            teamo = teamo + acao;
            document.getElementById("teamo").innerHTML = teamo;
          }
        });
        $(".btn_deixar_amei").click(function(){
          let vot_fim = this.id;
          pontuacao(+1);
          $("#amei_").show();
          $("#deixar_amei_").hide();
          $.ajax({
            success: function(data){
            }
          });
          function pontuacao(acao){
            let teamo = document.getElementById("teamo").innerHTML;
            teamo = parseInt(teamo);
            teamo = teamo - acao;
            document.getElementById("teamo").innerHTML = teamo;
          }
        });
        
        $(".btn_curtir").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#curte_".concat(id_usuario)).hide();
          $("#nao_curte_".concat(id_usuario)).show();
          $.ajax({
            url: "curtir.php",
            method: "post",
            data: {curtir_id_usuario: id_usuario},
            success: function(data){
              alert("Curtiu!");
            }
          });
        });
        $(".btn_deixar_curtir").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#curte_".concat(id_usuario)).show();
          $("#nao_curte_".concat(id_usuario)).hide();
          $.ajax({
            url: "deixar_curtir.php",
            method: "post",
            data: {deixar_curtir_id_usuario: id_usuario},
            success: function(data){
              alert("Deixou de Curtir!");
            }
          });
        });

        $(".btn_nao_curtiu").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#nao_cur_".concat(id_usuario)).hide();
          $("#deixar_nao_curte_".concat(id_usuario)).show();
          $.ajax({
            url: "nao_curtiu.php",
            method: "post",
            data: {nao_curtir_id_usuario: id_usuario},
            success: function(data){
              alert("Não Curtiu!");
            }
          });
        });
        $(".btn_deixar_nao_curtir").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#nao_cur_".concat(id_usuario)).show();
          $("#deixar_nao_curte_".concat(id_usuario)).hide();
          $.ajax({
            url: "deixar_nao_curtir.php",
            method: "post",
            data: {deixar_nao_curtir_id_usuario: id_usuario},
            success: function(data){
              alert("Deixou de Curtir!");
            }
          });
        });

        $(".btn_favorito").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#favorito_".concat(id_usuario)).hide();
          $("#deixar_favorito_".concat(id_usuario)).show();
          $.ajax({
            url: "favorito.php",
            method: "post",
            data: {favorito_id_usuario: id_usuario},
            success: function(data){
              alert("Favorito!");
            }
          });
        });
        $(".btn_deixar_favorito").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#favorito_".concat(id_usuario)).show();
          $("#deixar_favorito_".concat(id_usuario)).hide();
          $.ajax({
            url: "deixar_favorito.php",
            method: "post",
            data: {deixar_favorito_id_usuario: id_usuario},
            success: function(data){
              alert("Desfavorito!");
            }
          });
        });

        $(".btn_amei").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#amei_".concat(id_usuario)).hide();
          $("#deixar_amei_".concat(id_usuario)).show();
          $.ajax({
            url: "amei.php",
            method: "post",
            data: {amei_id_usuario: id_usuario},
            success: function(data){
              alert("Amei!");
            }
          });
        });
        $(".btn_deixar_amei").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $("#amei_".concat(id_usuario)).show();
          $("#deixar_amei_".concat(id_usuario)).hide();
          $.ajax({
            url: "deixar_amei.php",
            method: "post",
            data: {deixar_amei_id_usuario: id_usuario},
            success: function(data){
              alert("Não Amei!");
            }
          });
        });
        $("#coment").click(function(){
          $("#coment").hide();
          $("#form_texto_comentario").show();
          $("#btn_comentar").click(function(){
            if($("#texto_comentar").val().length > 0){
              $.ajax({
                url: "inclui_comentario.php",
                method: "post",
                data: $("#form_texto_comentario").serialize(),
                success: function(data){
                  $("#texto_comentar").val("");
                  atualizaComentario();
                }
              });
            }
          });
        });
        function atualizaComentario(){
          $.ajax({
            url: "get_comentario.php",
            success: function(data){
              $("#comentario").html(data);
            }
          });
        }
        atualizaComentario();
      }
    });
  }
  atualizaPost();
});