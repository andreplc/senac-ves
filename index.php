<!DOCTYPE.html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>dfdfdfdfdfdfd</title>

</head>
<body>
	<h1>
		<?php
			if(isset($_GET["user"])) {
					echo base64_decode($_GET["user"]);
			} else { 
				header("location:formulario.php");
			}

		?>
	</h1>	
			
		
</body>	
</html>