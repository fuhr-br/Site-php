<!DOCTYPE html>
<html>
	<head>
	<title>Vida Alternativa - Site de notícias</title>
		<meta charset="utf-8">
 		<meta name="author" content="Anderson Fuhr Souza"/>
		<meta name="description" content="Site responsivo com bootstrap , sobre noticias e informativos sobre a pandemia."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" type="text/css" href="../css/estilo.css">

	</head>

	<body id="duas-colunas" class="brasil">

		<div id="container">

			<div id="topo">
				<h1 class="logo">Vida Alternativa</h1>
				<ul id="navegacao">
					<li class="primeiro">
					<a id="home" href="../index.php">Home</a>
					</li>
					<li>
						<a id="alimentacao" href="./alimetacao.php">Alimentação</a>
					</li>
					<li>
						<a id="educacao" href="./educacao.php">Educação</a>
					</li>
					<li>
						<a id="empresas" href="./empresas.php">Empresas</a>
					</li>
					<li>
						<a id="esportes" href="./esportes.php">Esportes</a>
					</li>
					<li>
						<a id="pesquisa" href="./pesquisa.php">Pesquisa</a>
					</li>
					<li>
						<a id="financeiro" href="./financeiro.php">Financeiro</a>
					</li>
					<li>
						<a id="mundo" href="./mundo.php">Mundo</a>
					</li>
					<li>
						<a id="saude" href="./saude.php">Saúde</a>
					</li>
					<li>
						<a id="saudePet" href="./saudePet.php"> Pets</a>
					</li>
				</ul>
			</div>

			<div id="conteudo">

				<div id="primario">
					
					<div class="caixa destaque">
						<h2>Pratica esportiva</h2>
						<div class="caixa-conteudo">
						<img src="../imagens/corri.jpg" class="imagem-principal " alt="imagem de mulher correndo"><br/>
							<p>
								<h3>Médica do esporte aconselha bom senso</h3><br/>
							A médica do esporte Carla Tavares, por sua vez, prega o equilíbrio. Coordenadora do Departamento Médico do Minas Tênis Clube e do Serviço de Medicina do Esporte e Exercício da Rede Mater Dei de Saúde, ela reconhece que, na atual fase da pandemia no Brasil, não há proibição formal do governo à prática de exercício nas ruas. Ainda assim, deve haver prudência.
							A preferência, aconselha a médica, é ficar em casa, atendendo aos apelos das autoridades. Mas podem existir exceções.<br/>
							“A prática de exercício leve a moderado, no atual contexto, é fundamental para a saúde física e mental. Na minha opinião, se for possível que isso seja feito regularmente dentro de casa, perfeito! Para algumas pessoas, sair esporadicamente para uma corrida ou para exercícios ao ar livre pode ser necessário para manter o equilíbrio mental. Mas isso tem que ser feito com bom senso e respeitando as orientações”, pondera Dra. Carla, que também é professora de Cardiologia da Pós-Graduação em Medicina do Exercício e do Esporte do Instituto HZM e secretária-geral da Sociedade Mineira de Medicina do Esporte e Exercício.
							</p>
						
						</div>
						<div class="caixa-conteudo">
							<img src="../imagens/family.jpg" class="imagem-principal " alt="imagem de uma familia fazendo alongamento">
							<p>A Organização Mundial da Saúde (OMS) publicou sugestões de atividades para o ambiente doméstico, sem equipamento especial e com espaço limitado. Apesar da nítida preferência pelo isolamento, a OMS deixa em aberto a possibilidade de sair de casa para caminhar ou se exercitar. Nesse caso, enfatiza, deve-se manter uma distância de pelo menos 1 metro das outras pessoas.</p>
						</div>
					</div>

				</div>
				
				<div id="lateral">
					
					<div class="caixa">
						<h2>Entrevistas</h2>
						<div class="caixa-conteudo">
							<ul>
							<li><a href="./paginas/saude.php">Saúde Mental</a></li>
								<li><a href="./paginas/alimetacao.php">Saúde do Corpo</a></li>
								<li><a href="./paginas/esportes.php">Cuidados Diários</a></li>
								<li><a href="../paginas/mundo.php">Pandemia pelo Mundo</a></li>
							</ul>
						</div>
					</div>

					<div class="caixa">
						<h2>News</h2>
						<div class="caixa-conteudo">
							<form action="../php/notificacoes.php" method="post">
								<div>
									<label for="email">Email:</label>
									<input type="text" name="email" id="email" placeholder="E-mail" placeholder="nome@dominio.com" 

									pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"

								   title="O formato do e-mail de ser: nome@dominio.com ">
								</div>
								<div>
									<input class="submit" type="submit" value="Cadastrar" >
								</div>
							</form>

						</div>
					</div>

				</div>
				
			</div>

		</div>

		<div id="container-rodape" style="clear: both;">
			<div id="rodape">
				&copy;Vida Alternativa-Covid-19 2022
			</div>
		</div>

	</body>

</html>