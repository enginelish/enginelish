<?php
if (!isset($_SESSION)) { 	// Verifica se a sessão não já está aberta.
  session_start();			// Inicia sessão.
}
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
	<title>Enginelish - Hardware</title>
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
	
	</head>

	<body>
		
		<section name="play" class="play">
			<div class="quadro">
				<h2 style="margin-top: 0"><span class="type">Enginelish <span class=bread>>> Hardware</span> <a style="transform: rotate(180deg); margin-right: -4vw;" class="inicio" href="index.php#play">&#8618;</a></h2>
				<div class="mesa">
					<div class="fckn_div" style="background: url('');">
						
						<a href="ee.php" target="_self">  		
							<h2><i class="fas fa-bullhorn"></i>Escute e Entenda</h2> 
						</a>
						
						<a href="" target="_self">  		
							<h2><i class="fas fa-pencil-alt"></i>Complete as Lacunas</h2> 
						</a> 
						
						<a href="" target="_self">  		
							<h2><i class="fas fa-brain"></i>Jogo da Memória</h2> 
						</a> 
											
						<?php $na=$_SESSION["a"]; $sa=$na==1?"Realizada!":"";echo $sa;?></span>
						<?php $nb=$_SESSION["b"]; $sb=$nb==1?"Realizada!":"";echo $sb;?></span>
						<?php $nc=$_SESSION["c"]; $sc=$nc==1?"Realizada!":"";echo $sc;?></span>
						
					</div>
				</div>
				<aside>
					<div id="pontos">
			
						<h3><span class="type">Score</span></h3>
						<p>	<!-- Placar de pontuação -->
							<id="pont-software" class="type"> Software: <?php $nd=$_SESSION["d"]; $ne=$_SESSION["e"];$nf=$_SESSION["f"]; ?><span class="relogio" style="color: darkblue"> <?php echo $nd+$ne+$nf ?>/3</span></span><br/><br/>
							<span id="pont-hardware" class="type"> Hardware: <?php $na=$_SESSION["a"]; $nb=$_SESSION["b"];$nc=$_SESSION["c"]; ?><span class="relogio" style="color: darkblue"> <?php echo $na+$nb+$nc ?>/3</span></span><br/><br/>
							<span id="pont-internet" class="type"> Internet: <?php $ng=$_SESSION["g"]; $nh=$_SESSION["h"];$ni=$_SESSION["i"]; ?><span class="relogio" style="color: darkblue"> <?php echo $ng+$nh+$ni ?>/3</span></span>
						</p>
					</div>
				</aside>
			</div>
		</section>

		<div class=toclear></div>
	
		<script src="_js/scripts.js">
		
		</script>
	</body>

</html>