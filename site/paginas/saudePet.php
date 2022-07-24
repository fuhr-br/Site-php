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
		<link rel="stylesheet" type="text/css" href="../css/carrosel.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>

	<body id="uma-coluna" class="fotos">

	
		<div id="container">

			<!-- Início topo -->
			<div id="topo">
				<h1 class="logo">Vida ALternativa</h1>
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
						
						<div class="caixa-conteudo">
						<h3>Saúde do seu Pet</h3>
						<div class="slideshow-container">
						<div class="mySlides fade">
				  		<div class="numbertext">1 / 5</div>
						<img src="../imagens/baixado.jpg" alt="Dog" style="width:95%;">
 				 		<div class="text"></div>
						</div>

						<div class="mySlides fade">
			  			<div class="numbertext">2 / 5</div>
						<img src="../imagens/baixados.jpg" alt="pessoas e seu animais" style="width:95%;">
		 			    <div class="text"></div>
						</div>

						<div class="mySlides fade">
 		 				<div class="numbertext">3 / 5</div>
 						<img src="../imagens/mimi.jpg" alt="gato laranja" style="width:95%;">
 					    <div class="text"></div>
						</div>

						<div class="mySlides fade">
  						<div class="numbertext">4/ 5</div>
  						<img src="../imagens/gato.jpg" alt="gato preto" style="width:95%;">
  						<div class="text"></div>
 						</div>

						<div class="mySlides fade">
  						<div class="numbertext">5/ 5</div>
  						<img src="../imagens/humano.jpg" alt="Humanos e seus animais " style="width:95%;">
  						<div class="text"></div>
 						</div>
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						</div>
						<br>

						<div style="text-align:center">
  						<span class="dot" onclick="currentSlide(1)"></span> 
  						<span class="dot" onclick="currentSlide(2)"></span> 
 						<span class="dot" onclick="currentSlide(3)"></span> 
						</div>

						<script>
						var slideIndex = 1;
						showSlides(slideIndex);

						function plusSlides(n) {
						  showSlides(slideIndex += n);
						}

						function currentSlide(n) {
						  showSlides(slideIndex = n);
						}

						function showSlides(n) {
						  var i;
						  var slides = document.getElementsByClassName("mySlides");
						  var dots = document.getElementsByClassName("dot");
						  if (n > slides.length) {slideIndex = 1}    
						  if (n < 1) {slideIndex = slides.length}
						  for (i = 0; i < slides.length; i++) {
						      slides[i].style.display = "none";  
						  }
						  for (i = 0; i < dots.length; i++) {
						      dots[i].className = dots[i].className.replace(" active", "");
						  }
						  slides[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " active";
						}
						</script>


						</div>
					      
						<div class="caixa-conteudo">
								<p>
									

								<h3>Dicas para cuidar de seu pet durante a pandemia</h3><br/>

								Durante este período de isolamento social e restrição de algumas atividades, é fundamental que você fique atento e não deixe de cuidar da saúde de seu pet.
								Separamos algumas dicas para ajudar você. Confira!<br/>

								<strong>Consultas e Exames:</strong> faça o agendamento prévio de suas consultas e exames. Obedeça os protocolos estabelecidos e fique somente o tempo necessário na clínica.<br/>

								<strong>Comportamento:</strong> este período de isolamento também pode afetar seu amigo. Fique atento às mudanças de comportamento e busque atividades dentro de seu espaço para ocupar a mente de seu pet.<br/>

								<strong>Banhos:</strong> caso você tenha o hábito de levar seu bichinho para banho e tosa em pet shops, aproveite que o inverno está chegando e diminua a frequência, reduzindo a exposição a situações de risco.<br/>

								<strong>Passeios:</strong> assim como os banhos, os passeios também podem ser reduzidos, tanto em frequência quanto em distância. Dê preferência aos horários em que tenha menos movimento na rua e evite parques e praças.
							</p>

							
							

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
	