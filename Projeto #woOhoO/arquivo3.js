$(document).ready(function(){
  alert("Olá seja bem vindo, nesta página você encontrará os usuários deste aplicativo!");
  $("#btn_procurar_pessoas").click(function(){
    if($("#nome_pessoa").val().length > 0){
      $.ajax({
        url: "get_pessoas.php",
        method: "post",
        data: $("#form_procurar_pessoas").serialize(),
        success: function(data){
          $("#pessoas").html(data);
          $(".btn_seguir").click(function(){
            let id_usuario = $(this).data("id_usuario");
            $("#segue_".concat(id_usuario)).hide();
            $("#nao_segue_".concat(id_usuario)).show();
            $.ajax({
              url: "seguir.php",
              method: "post",
              data: {seguir_id_usuario: id_usuario},
              success: function(data){
                alert("seguindo");
                alert("Agora as postagens deste usuário aparecerão na sua timeline, e ele ficará disponível no bate-papo!");
              }
            });
          });
          $(".btn_deixar_seguir").click(function(){
            let id_usuario = $(this).data("id_usuario");
            $("#segue_".concat(id_usuario)).show();
            $("#nao_segue_".concat(id_usuario)).hide();
            $.ajax({
              url: "deixar_seguir.php",
              method: "post",
              data: {deixar_seguir_id_usuario: id_usuario},
              success: function(data){
                alert("deixou de seguir");
                alert("Agora as postagens deste usuário desaparecerão da sua timeline, e ele não ficará disponível no bate-papo!");
              }
            });
          });
          $(".perfil").click(function(){
            let usuario = $(this).data("usuario");
            let email = $(this).data("email");
            let id_usuario = $(this).data("id_usuario");
            document.getElementById("usuario_perfil").value = usuario;
            document.getElementById("email_perfil").value = email;
            document.getElementById("id_perfil").value = id_usuario;
          });
        }
      });
    }
  });
  function atualizaPost(){
    $.ajax({
      url: "get_post.php",
      success: function(data){
        $("#form_post").html(data);
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
        $(".btn_nao_cutiu_").click(function(){
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
        $(".btn_deixar_nao_curtir_").click(function(){
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
        $(".btn_favorito_").click(function(){
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
        $(".btn_deixar_favorito_").click(function(){
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
        $(".btn_amei_").click(function(){
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
        $(".btn_deixar_amei_").click(function(){
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
      }
    });
  }
  atualizaPost();
});