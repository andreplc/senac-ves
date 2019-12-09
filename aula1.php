<?php
	define("USER", "admin");
	define("SENHA", "123456");
	
	if(isset($_POST["btnLogin"])) {
		$login = $_POST["txtLogin"];
		$senha = base64_encode($_POST["txtSenha"]);
		if($login == USER && base64_decode($senha) == SENHA) {
			$login = base64_encode($login);
			header("location:index.php?user=$login");
		} else {	
			echo"<script>alert('Login e senha incorretos');</script>";
		}	
	}




?>


<!DOCTYPE.html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title></title>

</head>
<body>
	<form name="form1" method="post" action="#">
		<label for="txtLogin">Login:</label>
		<input type="text" name="txtLogin" id="txtLogin"  />
		<label for="txtSenha">Senha:</label>
		<input type="pasword" name="txtSenha" id="txtSenha" />
		<input type="submit" name="btnLogin" id="btnLogin" />
	
	
	
	</form>	

</body>
</html>