<!DOCTYPE html>
<html xml:lang>
	<head>
		<title>Vida Alternativa - Site de notícias</title>

		<meta charset="utf-8">
		<meta name="author" content="Anderson Fuhr Souza"/>
		<meta name="description" content="Site responsivo com bootstrap , sobre noticias e informativos sobre a pandemia."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

	</head>

	<body class="home">

		<div id="container">

			<div id="topo">
				<h1 class="logo">Vida Alternativa</h1>
				<ul id="navegacao">
					<li class="primeiro">
						<a id="home" href="index.php">Home</a>
					</li>
					<li>
						<a id="alimentacao" href="./paginas/alimetacao.php">Alimentação</a>

					</li>
					<li>
						<a id="educacao" href="./paginas/educacao.php">Educação</a>
					</li>
					<li>
						<a id="empresas" href="./paginas/empresas.php">Empresas</a>
					</li>
					<li>
						<a id="esportes" href="./paginas/esportes.php">Esportes</a>
					</li>
					<li>
						<a id="pesquisa" href="./paginas/pesquisa.php">Pesquisa</a>
					</li>
					<li>
						<a id="financeiro" href="./paginas/financeiro.php">Financeiro</a>
					</li>
					<li>
						<a id="mundo" href="./paginas/mundo.php">Mundo</a>
					</li>
					<li>
						<a id="saude" href="./paginas/saude.php">Saúde</a>
					</li>
					<li>
						<a id="saudePet" href="./paginas/saudePet.php"> Pets</a>
					</li>
					
			</div>

			<div id="conteudo">

				<div id="primario">
					
					<div class="caixa destaque">
						<h2>Destaque</h2>
						<div class="caixa-conteudo">

							<h3 class ="letra">Cuidados Básicos</h3>
					<iframe width="95%" height="315" src="https://www.youtube.com/embed/oloC4q1aHus" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<p>
							Dicas de prevenção do Coronavírus!
							</p>
							<a href="./paginas/saude.php">Leia mais!</a>
						</div>
					</div>

					<div class="caixa">
						<h2>Mundo</h2>
						<div class="caixa-conteudo">

							<ul id="lista-noticias">
								<li>
									<a href="./paginas/saude.php">
										<img src="./imagens/italia.jpg" width="80" alt="imagem de uma praça">
										<h3 class ="letra">COVID-19</h3>
										<p style="font-style: 0.5em;">Como outros países do mundo enfrentam a pandemia...</p>
									</a>
								</li>
								<li>
									<a href="./paginas/esportes.php">
										<img src="./imagens/bem.jpg" width="80" alt="mulher meditando">
										<h3 class ="letra">Dicas de bem-estar</h3>
										<p></p>
									</a>
								</li>
								
							</ul>

						</div>
					</div>

				</div>

				<div id="secundario">
					
					<div class="caixa entrevista">
						<h2>Última entrevista</h2>
						<div class="caixa-conteudo">
							
							<h3>Entrevista com Especialistas</h3>
							<img class="imagem-principal" src="imagens/especialistas.jpg" width="100%" alt="imagem ferramentas medicass">
						
							<a href="./paginas/saude.php">Leia mais!</a>
							
						</div>
					</div>

					<div class="caixa">
						<h2>Notícias recentes</h2>
						<div class="caixa-conteudo">

							<ul id="lista-noticias">
								<li>
									<a href="./paginas/saude.php">
										<img src="imagens/vaci.jpg" width="80" alt="braço sendo vacinado">
										<h3>Vacinas contra o Coronavírus</h3>
								
									</a>
								</li>
								
							</ul>

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
							
							<form action="./php/notificacoes.php" method="post">
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