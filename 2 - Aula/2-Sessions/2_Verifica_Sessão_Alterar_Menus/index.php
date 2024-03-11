<?php
// Iniciar sessão
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>PHP User + Sessão</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/index.css">
	</head>

	<body>

	<?php include './html/header.html'; ?>

	<?php include './php/menu.php'; ?>

	<div style="padding-left:16px">
		<h2>Simulação de verificação de sessão</h2>
		<p>Carregue em login para simular a verificação de utilizador/password.</p>
		<h2>Barra de navegação responsiva</h2>
		<p>Redimensione a janela do navegador para ver o funcionamento.</p>
		<h2>Variáveis de sessão:</h2>
		<p>
			<?php print_r($_SESSION); ?>
		</p>
	</div>

	</body>
</html>