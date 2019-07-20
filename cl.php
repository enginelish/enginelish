<?php
if (!isset($_SESSION)) { 	// Verifica se a sessão não já está aberta.
  session_start();			// Inicia sessão.
}
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
	<title>Enginelish - Escute e Entenda</title>
	<meta charset=utf-8>
	<meta name="description" content="<meta name="description" content="Página sobre hardware do Enginelish: jogo educativo para a prática divertida da língua inglesa em TI.">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" href="_css/estilo.css">
	<link rel="stylesheet" href="_css/menu.css">
	<link rel="stylesheet" href="_css/botao_inicio.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Nunito:900|Titillium+Web&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>
	<link rel="stylesheet" href="_css/pag2.css">
	
	<?php
		if ( empty($_SESSION["a"]) ) $_SESSION["a"] = 0;
		if ( empty($_SESSION["b"]) ) $_SESSION["b"] = 0;
		if ( empty($_SESSION["c"]) ) $_SESSION["c"] = 0;
		if ( empty($_SESSION["d"]) ) $_SESSION["d"] = 0;
		if ( empty($_SESSION["e"]) ) $_SESSION["e"] = 0;
		if ( empty($_SESSION["f"]) ) $_SESSION["f"] = 0;
		if ( empty($_SESSION["g"]) ) $_SESSION["g"] = 0;
		if ( empty($_SESSION["h"]) ) $_SESSION["h"] = 0;
		if ( empty($_SESSION["i"]) ) $_SESSION["i"] = 0;
	?>
	
	<style>
		
		#enunciado {
			box-sizing: border-box;
			border: 0px;
			width: 90%;
			margin: 50px auto 40px auto;
			font-weight: bold;
		}
		
		audio {
			display: table;
			box-sizing: border-box;
			border: 2px solid black;
			width: 30%;
			margin: 0px auto 40px auto;
			background-color: lightgray;
			box-shadow: 5px 10px;
		}
		
		.ativ p {
			font-family: Verdana;
			font-size: 12pt;
			text-indent: 2em;
			text-align: justify;
		}
		
		fieldset#pergunta {
			box-sizing: border-box;
			border: 2px solid black;
			width: 90%;
			margin: 0px auto 40px auto;
			background-color: white;
			padding: 10px;
			box-shadow: 5px 10px;
		}
		
		::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
			text-align: center;
			opacity: 1; /* Firefox */
		}
		
		fieldset#botoes {
			border: 0px;
			text-align: center;
		}
		
		input#btnResponder, input#btnResetar {
			margin: 0px 10px 0px 10px;
			width: 100px;
			box-shadow: 5px 10px;
			cursor: url(_imagens/_cursores/_red/link.cur), auto;
		}
		
		input[type=text] {
			display: table;
			background-color: white;
			margin: auto;
		}
		
		input[type=text]:hover, textarea:hover, input#btnEnviar:hover, input#btnResetar:hover {
			border: 1px solid darkblue;
		}
		
		input[type=text]:hover, textarea:hover, p:hover { 
			cursor: url(_imagens/_cursores/_red/text_1.cur), auto;
		}
		
		#correta, #incorreta {
			width: 90%;
			margin: 20px auto 0px auto;
			font-weight: bold;
		}
		
		#correta {
			color: navy;
		}
		
		#incorreta {
			color: darkred;
		}
		
	</style>
	
	</head>

	<body>
		
		<section name="play" class="play">
			<div class="quadro" style="border: 1px solid red;">
				<h2 style="margin-top: 0">Enginelish <span class=bread>>> Hardware >> <i class="fas fa-bullhorn"> <span class=fredoka>Escute e Entenda</span></i></span> <a style="transform: rotate(180deg); margin: 0vw 4vw 0 0;"; class="inicio" href="hardware.php">&#8618;</a></h2>

				<article class="ativ">

					<h3>Escute e Entenda</h3>
					<div id="enunciado">
					
					<p>Ouça o audio e responda corretamente à pergunta:</p>
					</div>
					
					<div id="palavras">
						<audio controls="controls">
							<source src="_mds/fox.mp3" type="audio/mpeg"/>
						</audio>
					</div>
					
					<form method="get" action="ee.php">
					
						<fieldset id="pergunta">
						<p>Over who does the fox jump?</p>
						<br/>
						<input type="text" name="texto1" id="campo1" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>
						
						<fieldset id=botoes>
						<input type="submit" id="btnResponder" value="Responder" />
						<input type="reset" id="btnResetar" value="Resetar"/>
						</fieldset>
						
						<?php
							if ( empty($_GET["texto1"]) ) $_GET["texto1"] = "";
							if (($_GET["texto1"]=="the lazy dog")or($_GET["texto1"]=="lazy dog")or($_GET["texto1"]=="The lazy dog")) {
							$_SESSION["a"]=1;echo"<div id='correta'><p>Resposta correta!</p></span>";
							} else {
								if ($_GET["texto1"]==""){
									
								} else {
									echo"<div id='incorreta'><p>Resposta incorreta.</p></span>";
									}
								}
						?>

					</form>
					
						
					</div>
				</div>
				</article>

			</div>
		</section>

		<div class=toclear></div>
	
		<script src="_js/scripts.js">
		
		</script>
	</body>

</html>