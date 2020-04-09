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
              $("#coment").click(function(){
                $("#coment").hide();
                $("#form_texto_comentario").show();
                $("#btn_comentar").click(function(){
                  if($("#texto_comentar").val().length > 0){
                    alert($("#texto_comentar").val());
                    $("#texto_comentar").val("");
                  }
                });
              });
            }
          });
        }
        atualizaPost();
      });