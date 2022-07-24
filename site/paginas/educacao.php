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
						<a id="saudePet" href="./saudePet.php">Pets</a>
					</li>
				</ul>
			</div>

			<div id="conteudo">

				<div id="primario">
					
					<div class="caixa destaque">
						<h2>Educação</h2>
						<div class="caixa-conteudo">
						<img src="../imagens/estudi.jpg"  class="imagem-principal" alt="homem estudando em um computador">
												
						</div>

						<div class="caixa-conteudo">
						<h3>Professora desenvolve metodologia divertida para aulas remotas</h3>
							<p>Pensando em tornar as aulas virtuais mais atraentes e envolver os alunos, a professora Sirdennys da Silva desenvolve o jogo pedagógico virtual para ensino de duas turmas do 4º ano da Escola Municipal Professor Carlos Raimundo Rodrigues.<br/>

							No projeto “Jogos versus aprendizagem: vivendo os desafios do mundo tecnológico” que é uma metodologia para brincar e aprender, a professora utiliza uma ferramenta online gratuita e paga para elaborar o jogo de perguntas e respostas. Para ela foi uma maneira de fazer o aluno estudar à distância em meio a pandemia de coronavírus.<br/>

							“A gente percebe uma ansiedade muito grande da parte dos professores em tentar alcançar esses alunos e, às vezes, nós não conseguimos. Essa foi uma saída que eu achei bem interessante, dos jogos pedagógicos virtuais, para que nós professores possamos fazer esse aluno estudar e se interessar mais pelos estudos”, disse a professora.</p>
						    <img src="../imagens/prof.jpg" class="imagem-principal" alt="mulher com caderno na mão em frente ao computador"><br/>
						    <small style="text-align: center">Sirdennys dá aulas na rede municipal de ensino (Foto: Arquivo Pessoal)</small><br/>
						    <p>Conforme a explicação da professora os alunos estão se adaptando bem, “alguns pais não sabem mexer, mas as crianças dão um show”. Silva utiliza o jogo para diversas disciplinas e consegue acompanhar o desenvolvimento dos pequenos com o acesso e a pontuação obtida com as respostas.<br/>

							Para os estudantes sem acesso ao computador, celular ou internet a atividade é disponibilizada impressa na escola.<br/>

							“Eu estava ansiosa para passar aos colegas essa possibilidade da gente exercer a nossa função, da transmissão do conhecimento sem necessariamente estar presente com o aluno. São opções que a gente pode desenvolver de casa mesmo com o aluno, tentando dar acessibilidade”, afirmou Sirdennys.<br/>

							Segundo a professora o projeto é experimental com as turmas em que leciona. Está sendo discutido entre os outros colegas de profissão para usarem como instrumento avaliativo. O projeto foi encaminhado à gestão escolar.</p><br/>

						</div>

						<div class="caixa-conteudo">

							<img src="../imagens/realidade.jpg" class="imagem-principal" alt=" imagem mostra mulher estudando alegre e outra entregue ao desespero comendo salgadinho">
							<h3>Nesse tempos quem  nunca se viu nessa realidade da foto</h3><br/>
							  <strong>Siga uma rotina</strong><br/>
							<p>A dica é seguir uma rotina similar à que teria se fosse para a escola: acordar cedo, vestir-se adequadamente, tomar o café da manhã no horário normal e focar nas atividades seguindo os conteúdos programáticos que seriam trabalhados em sala de aula.<br/>
								Recursos digitais oferecidos pela instituição de ensino são excelentes para esse momento, principalmente se eles possibilitarem que o professor acompanhe o desempenho dos alunos.<br/>
							<p><br/>
                                 <strong>Defina um lugar de estudos</strong>
							</p>É importante que o estudante escolha um ambiente tranquilo no qual não seja distraído pelo que acontece em seu entorno e realmente possa focar.<br/>

							<strong>Tenha equilíbrio</strong>
							<p>
								Pequenas pausas devem ocorrer com uma frequência semelhante à que teria na escola ou cursinho. E não se esqueça de se alimentar e se hidratar adequadamente.
							</p>
						<small>Referência:https://guiadoestudante.abril.com.br</small>

						</div>


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