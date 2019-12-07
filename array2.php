<!DOCTYPE.html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title></title>


<body>

	<h1> Olá mundo XXX </h1>	
	
	<p>
	<?php
		
		if(isset($_GET["btnCalcular"])) {
		$num1 = $_GET["numero1"];
		$num2 = $_GET["numero2"];
		$num3 = $_GET["numero3"];
		$num4 = $_GET["numero4"];
		
		$res = ($num1 + $num2 + $num3 + $num4) / 4; 
		} else {
				$res = 0;
		}	
	
		
		echo "Olá mundo"; // usar esse comando como principal "echo = escreva"
	
		$valor = "oi Turma!";
		$resultado = 2+3;
	
		define("TITULO", "Meu site !!!!");
		
	
	?>
	</p> 
	
	<p><?= $valor ?></p>
	<?php echo $resultado; ?>
	
	<h1> <?php echo TITULO; ?></h1>
	<a href="formulario.php">FORMULARIO </a>
	<h2><?=$res?></h2>
</body>
</html>		
