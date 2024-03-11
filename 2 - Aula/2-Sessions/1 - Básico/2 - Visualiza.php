<?php
	// Iniciar sessão
	session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>PHP Sessão - Visualiza Vars</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
	// Visualiza as variáveis de sessão definidas na página anterior
	echo "Olá, o seu nome é " . $_SESSION["nome"] . ".<br />";
	echo "e o seu clube favorito é o " . $_SESSION["clube"] . ".";
?>

</body>
</html>