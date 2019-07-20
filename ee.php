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
		
		if ( empty($_SESSION["a1"]) ) $_SESSION["a1"] = 0;
		if ( empty($_SESSION["a2"]) ) $_SESSION["a2"] = 0;
		if ( empty($_SESSION["a3"]) ) $_SESSION["a3"] = 0;
		if ( empty($_SESSION["a4"]) ) $_SESSION["a4"] = 0;
		if ( empty($_SESSION["a5"]) ) $_SESSION["a5"] = 0;
		if ( empty($_SESSION["a6"]) ) $_SESSION["a6"] = 0;
		if ( empty($_SESSION["a7"]) ) $_SESSION["a7"] = 0;
		if ( empty($_SESSION["a8"]) ) $_SESSION["a8"] = 0;
		if ( empty($_SESSION["a9"]) ) $_SESSION["a9"] = 0;
		if ( empty($_SESSION["a10"]) ) $_SESSION["a10"] = 0;
		if ( empty($_SESSION["a11"]) ) $_SESSION["a11"] = 0;
		if ( empty($_SESSION["a12"]) ) $_SESSION["a12"] = 0;
		if ( empty($_SESSION["a13"]) ) $_SESSION["a13"] = 0;
		if ( empty($_SESSION["a14"]) ) $_SESSION["a14"] = 0;
		if ( empty($_SESSION["a15"]) ) $_SESSION["a15"] = 0;
		
		if ( empty($_GET["texto1"]) ) $_GET["texto1"] = "";
		if ( empty($_GET["texto2"]) ) $_GET["texto2"] = "";
		if ( empty($_GET["texto3"]) ) $_GET["texto3"] = "";
		if ( empty($_GET["texto4"]) ) $_GET["texto4"] = "";
		if ( empty($_GET["texto5"]) ) $_GET["texto5"] = "";
		if ( empty($_GET["texto6"]) ) $_GET["texto6"] = "";
		if ( empty($_GET["texto7"]) ) $_GET["texto7"] = "";
		if ( empty($_GET["texto8"]) ) $_GET["texto8"] = "";
		if ( empty($_GET["texto9"]) ) $_GET["texto9"] = "";
		if ( empty($_GET["texto10"]) ) $_GET["texto10"] = "";
		if ( empty($_GET["texto11"]) ) $_GET["texto11"] = "";
		if ( empty($_GET["texto12"]) ) $_GET["texto12"] = "";
		if ( empty($_GET["texto13"]) ) $_GET["texto13"] = "";
		if ( empty($_GET["texto14"]) ) $_GET["texto14"] = "";
		if ( empty($_GET["texto15"]) ) $_GET["texto15"] = "";
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
		}
		
		input[type=text] {
			display: table;
			background-color: white;
			margin: auto;
		}
		
		input[type=text]:hover, textarea:hover, input#btnEnviar:hover, input#btnResetar:hover {
			border: 1px solid darkblue;
		}
		
		#correta, #incorreta {
			font-size: calc(7px+0.2vw);
			font-weight: bold;
			margin: auto;
			margin-top: 0.5vw;
			text-align: center;
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
				<h2 style="margin-top: 0"><span class="type"> Enginelish <span class=bread> >> Hardware >> <i class="fas fa-bullhorn"> <span class=fredoka> Escute e Entenda </span> </i> </span> </span> <a style="transform: rotate(180deg); margin-right: -5vw;" class="inicio" href="hardware.php">&#8618;</a></h2>

				<article class="ativ">

					<h3>Escute e Entenda</h3>
					<div id="enunciado">
					
					<p>Ouça os audios e responda corretamente as perguntas abaixo:</p>
					</div>
								
					<form method="get" action="ee.php">

						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb01p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>01. A device you can get money from:</p>
						<br/>
						<input type="text" name="texto1" id="campo1" size="40" maxlength="30" placeholder="<?php if ($_SESSION["a1"]==1) { echo ($_GET["texto1"]);}else{echo "?";}?> required="required"/></p>
						
						<?php
							if ( empty($_GET["texto1"]) ) $_GET["texto1"] = "";
							if (($_GET["texto1"]=="ATM")) {
							$_SESSION["a1"]=1;echo"<p><span id='correta'>"; echo $_GET["texto1"]; echo ". Resposta correta!</span></p>";
							} else {
								if ($_GET["texto1"]==""){
									
								} else {
									$_SESSION["a1"]=0;
									echo"<p><span id='incorreta'>A resposta correta era <span style='font-weight: bold;'>ATM</span></span></p>";
									}
								}
						?>
						
						</fieldset>
						
					
						
						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb02p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>02. To type a text or a command, we use the:</p>
						<br/>
						<input type="text" name="texto2" id="campo2" size="40" maxlength="30" placeholder="?" required="required"/></p>
						
						<?php
							if ( empty($_GET["texto2"]) ) $_GET["texto2"] = "";
							if (($_GET["texto2"]=="Keyboard")) {
							$_SESSION["a2"]=1;echo"<p><span id='correta'>"; echo $_GET["texto2"]; echo ". Resposta correta!</span></p>";
							} else {
								if ($_GET["texto2"]==""){
									
								} else {
									$_SESSION["a2"]=0;
									echo"<p><span id='incorreta'>A resposta correta era <span style='font-weight: bold;'>Keyboard</span></span></p>";
									}
								}
						?>
						</fieldset>
						
						
						
						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb03p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>03. A flat surface on which we roll the mouse:</p>
						<br/>
						<input type="text" name="texto3" id="campo3" size="40" maxlength="30" placeholder="?" required="required"/></p>
						
						<?php
							if ( empty($_GET["texto3"]) ) $_GET["texto3"] = "";
							if (($_GET["texto3"]=="Mouse Mat")or($_GET["texto3"]=="Mousepad")) {
							$_SESSION["a3"]=1;echo"<p><span id='correta'>"; echo $_GET["texto3"]; echo ". Resposta correta!</span></p>";
							} else {
								if ($_GET["texto3"]==""){
									
								} else {
									$_SESSION["a3"]=0;
									echo"<p><span id='incorreta'>A resposta correta era <span style='font-weight: bold;'>Mouse mat or mousepad</span></span></p>";
									}
								}
						?>
						</fieldset>

<!--

						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb04p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>04. Same as ‘display’; it is used to view texts, images, videos:</p>
						<br/>
						<input type="text" name="texto4" id="campo4" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb05p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>05. Interface used to link one device with another:</p>
						<br/>
						<input type="text" name="texto5" id="campo5" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb06p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>06. A multifunction printer; one which can print, scan or copy a document:</p>
						<br/>
						<input type="text" name="texto6" id="campo6" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb07p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>07. If you wish to add more functionality to your computer, you can use:</p>
						<br/>
						<input type="text" name="texto7" id="campo7" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb08p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>08. Device used to avoid the overheating of your computer:</p>
						<br/>
						<input type="text" name="texto8" id="campo8" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb09p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>09. If you want to paste an image to a document, press Ctrl + V on your keyboard.</p>
						<br/>
						<input type="text" name="texto9" id="campo9" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb10p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>10. Type of portable (small) computers you can easily take with you:</p>
						<br/>
						<input type="text" name="texto10" id="campo10" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb11p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>11. Output devices used to play audio files from your computer:</p>
						<br/>
						<input type="text" name="texto11" id="campo11" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb12p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>12. Type of computer used by big companies, which processes large amounts of data:</p>
						<br/>
						<input type="text" name="texto12" id="campo12" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb13p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>13. A allows the communication to the CPU, RAM, and other hardware components.</p>
						<br/>
						<input type="text" name="texto13" id="campo13" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb14p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>14. The acronym CPU stands for:</p>
						<br/>
						<input type="text" name="texto14" id="campo14" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>



						<div class="palavras">
							<audio controls="controls">
								<source src="_mds/fb15p.mp3" type="audio/mpeg"/>
							</audio>
						</div>
						<fieldset id="pergunta">
						<p>15. The acronym ROM stands for:</p>
						<br/>
						<input type="text" name="texto15" id="campo15" size="40" maxlength="30" placeholder="?" required="required"/></p>
						</fieldset>


-->	

						<fieldset id=botoes>
						<input type="submit" id="btnResponder" value="Responder" />
						<input type="reset" id="btnResetar" value="Resetar"/>
						</fieldset>
						
					
						
						<?php
							if (($_SESSION["a1"]+$_SESSION["a2"]+$_SESSION["a3"])==3) {
							$_SESSION["a"]=1;
							}
							if ($_SESSION["a"]==1){
							echo"<div id='correta' style='font-size: calc(10px+2vw)'><p>Respondeu a todas corretamente. Ganhou 1 ponto!</p></span>";
							} else {
								echo"<div id='incorreta' style='font-size: calc(10px+2vw)'><p>Desafio ainda não completado.</p></span>";
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