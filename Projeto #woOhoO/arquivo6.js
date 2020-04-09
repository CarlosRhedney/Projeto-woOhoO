$(document).ready(function(){
        alert("Olá seja bem vindo, este é seu chat de conversas!");
        $.ajax({
          url: "get_chat.php",
          method: "post",
          success: function(data){
            $("#pessoas").html(data);
            $(".btn_chat").click(function(){
              window.location.href = "conversas.php";
            });
          }
        });
        function atualizaPost(){
          $.ajax({
            url: "get_post.php",
            success: function(data){
              $("#form_post").html(data);
              $(".btn_curtir").click(function(){
                var vot_fim = this.id;
                pontuacao(+1); var id_usuario = $(this).data("id_usuario");
                $("#curte_").hide();
                $("#nao_curte_").show();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var like = document.getElementById("like").innerHTML;
                    like = parseInt(like);
                    like = like + acao;
                    document.getElementById("like").innerHTML = like;
                }
              });
              $(".btn_deixar_curtir").click(function(){
                var vot_fim = this.id;
                pontuacao(+1);
                $("#curte_").show();
                $("#nao_curte_").hide();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var like = document.getElementById("like").innerHTML;
                    like = parseInt(like);
                    like = like - acao;
                    document.getElementById("like").innerHTML = like;
                }
              });
              $(".btn_nao_cutiu_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1); var id_usuario = $(this).data("id_usuario");
                $("#nao_cur_").hide();
                $("#deixar_nao_curte_").show();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var deslike = document.getElementById("deslike").innerHTML;
                    deslike = parseInt(deslike);
                    deslike = deslike + acao;
                    document.getElementById("deslike").innerHTML = deslike;
                }
              });
              $(".btn_deixar_nao_curtir_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1);
                $("#nao_cur_").show();
                $("#deixar_nao_curte_").hide();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var deslike = document.getElementById("deslike").innerHTML;
                    deslike = parseInt(deslike);
                    deslike = deslike - acao;
                    document.getElementById("deslike").innerHTML = deslike;
                }
              });
              $(".btn_favorito_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1); var id_usuario = $(this).data("id_usuario");
                $("#favorito_").hide();
                $("#deixar_favorito_").show();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var favorito = document.getElementById("favorito").innerHTML;
                    favorito = parseInt(favorito);
                    favorito = favorito + acao;
                    document.getElementById("favorito").innerHTML = favorito;
                }
              });
              $(".btn_deixar_favorito_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1);
                $("#favorito_").show();
                $("#deixar_favorito_").hide();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var favorito = document.getElementById("favorito").innerHTML;
                    favorito = parseInt(favorito);
                    favorito = favorito - acao;
                    document.getElementById("favorito").innerHTML = favorito;
                }
              });
              $(".btn_amei_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1); var id_usuario = $(this).data("id_usuario");
                $("#amei_").hide();
                $("#deixar_amei_").show();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var teamo = document.getElementById("teamo").innerHTML;
                    teamo = parseInt(teamo);
                    teamo = teamo + acao;
                    document.getElementById("teamo").innerHTML = teamo;
                }
              });
              $(".btn_deixar_amei_").click(function(){
                var vot_fim = this.id;
                pontuacao(+1);
                $("#amei_").show();
                $("#deixar_amei_").hide();
                $.ajax({
                  success: function(data){
                  }
                });
                function pontuacao(acao){
                    var teamo = document.getElementById("teamo").innerHTML;
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