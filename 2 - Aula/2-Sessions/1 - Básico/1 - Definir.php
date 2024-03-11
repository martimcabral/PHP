<?php
// Iniciar sessão
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>PHP Sessão - Define Vars</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
	// Define variaveis de sessão
	$_SESSION["nome"] = "Fabiano";
	$_SESSION["clube"] = "Santa Clara";
	echo "As variáveis de sessão estão definidas.";
?>

</body>
</html>