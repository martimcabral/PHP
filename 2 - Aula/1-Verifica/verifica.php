<?php

$servidor = "localhost";
$basedados = "DADOS";
$utilizador = "admin";
$password = "System32";
$dst="mysql:host=$servidor; dbname=$basedados; charset=UTF8";

try {
// Cria ligacao
$conn = new PDO($dst, $utilizador, $password);

$nome = $_POST['nome'];
$password = $_POST['password'];

$sql = "SELECT * FROM TABELA where nome='$nome' and pass='$password'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if ($row = $stmt->fetch()) {
    
        include 'jogo.php';
       
    } else {
		echo "Utilizador ou password inválida!<br>";
		include 'index.php';
	}

} catch (PDOException $err) {
    die("A ligação ao servidor $servidor falhou com o erro: " . $err->getMessage());
}

?>