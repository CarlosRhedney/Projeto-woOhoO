<DOCTYPE html>
<html lang="pt-br">
<head>
	<title>jogo</title>
	<link rel="icon" href="imagens/iniciar.png" />
	<meta charset="UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	<script type="text/javascript">
		function inicia_jogo(){
			var nivel_jogo = document.getElementById("nivel_jogo").value;
			window.location.href = "jogo.php?"+nivel_jogo;
		}
	</script>
</head>
<body style="background:#F5DEB3;">
	<div style="text-align:center;">
		<p style="font-size:100px; font-family: 'Rock Salt', cursive;">
			<b>Nível</b>
			<select style="font-size:80px" id="nivel_jogo">
				<option value="1">Fácil</option>
				<option value="2">Normal</option>
				<option value="3">Difícil</option>
			</select>
		</p>
		<img style="height:200px" class="animated infinite tada" src="imagens/iniciar.png" onclick="inicia_jogo()" />
	</div>
</body>
</html>