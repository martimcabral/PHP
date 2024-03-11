<link rel="stylesheet" href="style.css">

Olá <?php echo htmlspecialchars($_POST['nome']); ?>.
Você tem <?php echo (int)$_POST['idade']; ?> anos.

<br><br><br><br><a href="index.php"><< Voltar</a>