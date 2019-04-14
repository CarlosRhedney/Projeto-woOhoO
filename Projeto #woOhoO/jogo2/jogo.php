<DOCTYPE html>
<html lang="pt-br">
<head>
	<title>jogo</title>
	<meta charset="UTF-8" />
	<link rel="icon" href="imagens/iniciar.png" />
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<link href="https://fonts.googleapis.com/css?family=Megrim|Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script type="text/javascript">
		var timerId = null;
		function iniciar_jogo(){
			var url = window.location.search;
			var nivel_jogo = url.replace("?", "");
			var tempo_segundos = 0;
			if(nivel_jogo == 1){
				tempo_segundos = 120;
			}
			if(nivel_jogo == 2){
				tempo_segundos = 60;
			}
			if(nivel_jogo == 3){
				tempo_segundos = 30;
			}
			document.getElementById("cronometro").innerHTML = tempo_segundos;
			var qtde_baloes = 30;
			cria_baloes(qtde_baloes);
			document.getElementById("baloes_inteiros").innerHTML = qtde_baloes;
			document.getElementById("baloes_estourados").innerHTML = 0;
			contagem_tempo(tempo_segundos +1);
		}

		function contagem_tempo(tempo_segundos){
			tempo_segundos = tempo_segundos -1;
			if(tempo_segundos == -1){
				clearTimeout(timerId);
				game_over();
				return false;
			}
			document.getElementById("cronometro").innerHTML = tempo_segundos;
			timerId = setTimeout("contagem_tempo("+tempo_segundos+")", 1000);
		}

		function game_over(){
			alert("GAME OVER!");
			remove_eventos_baloes();
		}

		function cria_baloes(qtde_baloes){
			for(var i = 1; i <= qtde_baloes; i++){
				var balao = document.createElement("img");
				balao.src = "imagens/balao_azul_pequeno.png";
				balao.style.margin = "10px";
				balao.id = "c"+i;
				balao.onclick = function(){estourar(this);};
				document.getElementById("cenario").appendChild(balao);
			}
		}

		function estourar(e){
			var id_balao = e.id;
			document.getElementById(id_balao).src = "imagens/balao_azul_pequeno_estourado.png";
			document.getElementById(id_balao).setAttribute("onclick", "");
			pontuacao(-1);
		}

		function pontuacao(acao){
			var baloes_inteiros = document.getElementById("baloes_inteiros").innerHTML;
			var baloes_estourados = document.getElementById("baloes_estourados").innerHTML;
			baloes_inteiros = parseInt(baloes_inteiros);
			baloes_estourados = parseInt(baloes_estourados);
			baloes_inteiros = baloes_inteiros + acao;
			baloes_estourados = baloes_estourados - acao;
			document.getElementById("baloes_inteiros").innerHTML = baloes_inteiros;
			document.getElementById("baloes_estourados").innerHTML = baloes_estourados;
			situacao_jogo(baloes_inteiros);
		}

		function remove_eventos_baloes() {
    		var i = 1;
		    while(document.getElementById('c'+i)) {
		        document.getElementById('c'+i).onclick = '';
		        i++;
		    }
		}

		function situacao_jogo(baloes_inteiros){
			if(baloes_inteiros == 0){
				alert("Parabéns voçê estourou todos os balões a tempo!");
				parar_jogo();
			}
		}

		function parar_jogo(){
			clearTimeout(timerId);
		}

		function voltar_jogo(){
        window.location.href = "index.php";
      }

	</script>
</head>
<h1><span style="font-family: 'Press Start 2P', cursive; letter-spacing:-5px;"><span style="color: #DB7093">GAME</span> <span style="color: #BDB76B;">ESTOURANDO</span> <span style="color: #D8BFD8;">BALÕES</span></h1>
<body style="background:#F5DEB3;" onload="iniciar_jogo()">
	<div align="center" style="float:left; width:auto; height:500px; background:fff; border:1px solid red;">
		<table border="0">
			<tr>
				<td><img src="imagens/balao_azul_grande.png" class="animated infinite pulse" /></td>
				<td><span style="font-size:40px;" id="baloes_inteiros"></span></td>
			</tr>
		</table>
		<table border="0">
			<tr>
				<td><img src="imagens/balao_azul_grande_estourado.png" class="animated infinite pulse" /></td>
				<td><span style="font-size:40px;" id="baloes_estourados"></span></td>
			</tr>
		</table>
		<table border="0">
			<tr>
				<td id="cronometro" style="width:138px; height:132px; background: url('imagens/cronometro.png'); font-size:40px; color:red; text-align:center;"></td>
			</tr>
		</table>
		<table border = "0" style="width:140px; height:132px">
        	<tr style="transform: rotate(180deg);">
         	 <td><img style="margin-left:20px; rotate:40px;" class="animated infinite tada" src="imagens/iniciar.png" onclick="voltar_jogo()" /></td>
        	</tr>
        </table>

	</div>
	<div id="cenario" align="center" style="float:left; width:600px; height:500px; background: url('imagens/cenario.png'); background-position:bottom;"></div>
</body>
</html>