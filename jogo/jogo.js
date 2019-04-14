var rodada = 1;
var matriz_jogo = Array(3);
matriz_jogo["a"] = Array(3);
matriz_jogo["b"] = Array(3);
matriz_jogo["c"] = Array(3);

matriz_jogo["a"][1] = 0;
matriz_jogo["a"][2] = 0;
matriz_jogo["a"][3] = 0;

matriz_jogo["b"][1] = 0;
matriz_jogo["b"][2] = 0;
matriz_jogo["b"][3] = 0;

matriz_jogo["c"][1] = 0;
matriz_jogo["c"][2] = 0;
matriz_jogo["c"][3] = 0;

$(document).ready(function(){
	$("#btn_inicia_jogo").click(function(){
		// verifica se os nomes dos jogadores foi preenchido
		if($("#entrada_nome_jogador1").val() == ""){
			alert("Nome do jogador 1 não foi preenchido!");
			return false;
		}
		if($("#entrada_nome_jogador2").val() == ""){
			alert("Nome do jogador 2 não foi preenchido!");
			return false;
		}
		// recupera os nomes digitados pelos usuários e
		// insere os nomes dos jogadores nas partidas
		$("#nome_jogador1").html($("#entrada_nome_jogador1").val());
		$("#nome_jogador2").html($("#entrada_nome_jogador2").val());
		//manipula as divs, controla todo o cenário do jogo dando a impressão de mudança de tela
		$("#pagina_inicial").hide();
		$("#pagina_jogo").show();
	});
	//recupera o id do campo da tabela assim que o elemento é clicado
	$(".jogada").click(function(){
		var id_campo_clicado = this.id;
		jogada(id_campo_clicado);
		$("#"+id_campo_clicado).off();
	});
	// transforma o id do campo clicado em ponto e icone para ser inserido na matriz do jogo
	function jogada(id_campo_clicado){
		var icone = "";
		var ponto = 0;
		if((rodada % 2) == 1){
			icone = 'url("imagens/marcacao_1.png")';
			ponto = -1;
		} else {
			icone = 'url("imagens/marcacao_2.png")';
			ponto = 1;
		}
		rodada++;
		$("#"+id_campo_clicado).css("background-image", icone);
		var linha_coluna = id_campo_clicado.split("-");
		matriz_jogo[linha_coluna[0]][linha_coluna[1]] = ponto;
		verifica_combinacao();
	}

	function verifica_combinacao(){
		// verifica a combinação das linhas A B e C
		pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo["a"][i];
		}
		ganhador(pontos);

		pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo["b"][i];
		}
		ganhador(pontos);

		pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo["c"][i];
		}
		ganhador(pontos);
		// verifica a combinação das colunas 1 2 e 3
		for(var j = 1; j <= 3; j++){
			pontos = 0;
			pontos += matriz_jogo["a"][j];
			pontos += matriz_jogo["b"][j];
			pontos += matriz_jogo["c"][j];
			ganhador(pontos);
		}
		// verifica a combinação na diagonal principal
		pontos = 0;
		pontos = matriz_jogo["a"][1] + matriz_jogo["b"][2] + matriz_jogo["c"][3];
		ganhador(pontos);
		// verifica a combinação na diagonal secundária
		pontos = 0;
		pontos = matriz_jogo["a"][3] + matriz_jogo["b"][2] + matriz_jogo["c"][1];
		ganhador(pontos);
	}
	// verifica se algum dos jogadores atingiu a combinação para a vitória
	function ganhador(pontos){
		if(pontos == -3){
			var nome1 = $("#entrada_nome_jogador1").val();
			alert(nome1 + " é o vencedor da partida!");
			$(".jogada").off();

		} else if(pontos == 3){
			var nome2 = $("#entrada_nome_jogador2").val();
			alert(nome2 + " é o vencedor da partida!");
			$(".jogada").off();
		}
	}
	// botão voltar da página secundária
	$("#voltar").click(function(){
		window.location.search = "pagina_inicial";
	});

});