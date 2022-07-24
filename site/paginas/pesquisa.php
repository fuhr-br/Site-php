<!DOCTYPE html>
<html>
	<head>
	<title>Vida Alternativa - Site de notícias</title>
		<meta charset="utf-8">
       <meta name="author" content="Anderson Fuhr Souza"/>
		<meta name="description" content="Site responsivo com bootstrap , sobre noticias e informativos sobre a pandemia."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Estilo customizado -->
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	

	</head>

	<body id="uma-coluna" class="fotos">

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
						<h2 >Você na pandemia !</h2>
						<form method="post" action="../php/dados.php" id="formula">

						<div class="caixa-conteudo">
							<fieldset id="linha2">
							<legend>
							Seus Dados
							</legend>
						<h3>Qual seu nome completo?</h3>
						<input type="text" name="nome" id="nome"  placeholder="Nome completo:" maxlength="100" required><br/>
						</fieldset>
						</div>

							<div class="caixa-conteudo">
							<h3>Como está sua alimentação? </h3><br/>
							<input  type="radio" name="alimentacao"  value="boa" checked ><label class="letra">Boa</label> <br/>
        					<input  type="radio" name="alimentacao" value="regular"><label class="letra">Regular</label> <br/>
        					<input  type="radio" name="alimentacao" value="ruim"><label class="letra">Ruim</label><br/>
							</div>

							<div class="caixa-conteudo">
							<h3>Nesse período de quarentena você manteve uma alimentação saudável?</h3><br/>
							 <input  type="radio" name="status"  value="sim" checked ><label class="letra">Sim</label> <br/>
         					<input  type="radio" name="status" value="não"><label class="letra">Não</label><br/>
							</div>

							<div class="caixa-conteudo">
							<fieldset  id="linha" >
							<legend>
							Educação
							</legend>	
							<h3>Qual sua atividade educacional no momento?</h3><br/>
							 <input type="radio" name="ensinoF"  value="ensinoF"><label class="letra">Ensino Fundamental</label> <br/>
						     <input type="radio" name="ensinoM" value="ensinoM"><label class="letra">Ensino Médio</label><br/>
						     <input type="radio" name="ensinoS" value="ensinoS"><label class="letra">Ensino Superior</label><br/>
						     <input type="radio" name="cursoProf" value="cursoProf"><label class="letra">Cursos Profissionalizantes</label> <br/>
						     <input type="radio" name="cursoTec" value="cursoTec"><label class="letra">Cursos Técnicos</label>  <br/>
						     <input type="radio" name="especializacoes" value="especializacoes"><label class="letra">Especializações</label>  <br/>
						     <input type="radio" name="ne" value="nenhum"><label class="letra">Nenhum</label><br/>

							</fieldset>	

						</div>

						<div class="caixa-conteudo">
						<h3>Você possui animais de estimação?</h3><br/>
						<input  type="radio" name="opcao" checked value="sim"><label class="letra">Sim</label> <br/>
        				<input  type="radio" name="opcao" value="nao"><label class="letra">Não<br/>
								
						</div>

						<div class="caixa-conteudo">
							<h3> Quais deles?</h3><br/>
							 <input type="checkbox" name="cachorro" value="cachorro" ><label class="letra">Cachorro</label><br/>
     						 <input type="checkbox" name="passarinho" value="passarinho"><label class="letra">Passarinho</label> <br/>
     						<input type="checkbox" name="gato" value="gato"><label class="letra"> Gato</label><br/>
    					    <input type="checkbox" name="outros" value="outros"><label class="letra">Outros</label><br/>
     						<input type="checkbox" name="nenhum" value="nenhum"><label class="letra">Nenhum</label><br/>
								
						</div>

						<div class="caixa-conteudo">
						<h3>Desde o início da quarentena, você apresentou problemas financeiros?</h3><br/>
							<textarea name="financeiro" id="mensagem"></textarea><br/>
							
						</div>

						<div class="caixa-conteudo">
							<h3>Você gostaria de receber dicas de:</h3><br/>
    					 <input type="checkbox" name="alime" value="alimentacao"><label class="letra">Alimentação </label> <br/>
     					<input type="checkbox" name="bemestar" value="bemestar"><label class="letra">Bem-estar</label><br/>
     					<input type="checkbox" name="culinaria" value="culinaria"><label class="letra">Culinária</label><br/>
    				   <input type="checkbox" name="fina" value="financeiro"><label class="letra">Financeiro</label> <br/>
     					<input type="checkbox" name="educacao" value="educacao"><label class="letra">Educação</label><br/>
     					<input type="checkbox" name="our" value="outros"><label class="letra">Outros</label> <br/>
							
						</div>

						<div class="caixa-conteudo">
							<h3>Você faz  alguma atividade física ? Sim Qual?</h3><br/>
    						<textarea name="atividade" id="mensagem" placeholder="Deixe um breve relato sobre suas experiência."></textarea><br/>
								

						</div>

						<div class="caixa-conteudo">
							<h3>Você faz  alguma atividade física ? Se sim Qual?</h3><br/>
    						<textarea name="atividade" id="mensagem" placeholder="....."></textarea><br/>
							

						</div>
						
						<div class="caixa-conteudo">
							<h3>
		 					Quando acabar a pandemia o que você gostaria de fazer?</h3>
							<br/>
		 				<textarea name="mensagem" id="mensagem" placeholder="....."></textarea><br/>
							
						</div>
						<input type="submit"  class="submit" value="Enviar " />
	                    <input type="reset"  class="submit" value="Limpar" />

			</form>

             </div>	
			</div>

		</div>

		<div id="container-rodape" style="clear: both;">
			<div id="rodape">
			&copy;Vida Alternativa-Covid-19 2021
			</div>
		</div>

	</body>

</html>