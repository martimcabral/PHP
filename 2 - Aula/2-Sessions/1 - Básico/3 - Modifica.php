<?php
	// Iniciar sessão
	session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>PHP Sessão - Modifica Vars</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
	// para modificar uma variável basta sobrescrever
	$_SESSION["clube"] = "Capelense";

	// outra hipotese em vez de echo para mostrar o valor das variáveis
	print_r($_SESSION);
?>

</body>
</html>