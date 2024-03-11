<?php
session_start();

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
        $_SESSION["nome"] = $nome;
	    $_SESSION["pass"] = $pass;

        header("Location: /2-Sessions/2_Verifica_Sessão_Alterar_Menus/");
        die();
    } else {
		echo "Utilizador ou password inválida!<br>";
		include 'login.php';
	}

} catch (PDOException $err) {
    die("A ligação ao servidor $servidor falhou com o erro: " . $err->getMessage());
}

?>