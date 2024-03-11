<?php
	// Iniciar sessão
	session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>PHP Sessão - Desatribui vars e destroi sessão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
	// remove todas as varáveis de sessão
	session_unset();

	// Destroi a sessão
	session_destroy();
?>

</body>
</html>