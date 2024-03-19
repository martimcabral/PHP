<?php
require_once 'config.php';

try {
    $conn = new PDO($dst, $utilizador, $password);
    $sql = 'insert into tarefas(tarefa) values(:valainserir)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([':valainserir' => 'Aprender PHP PDO MySQL']);
	echo "Valor introduzido com sucesso!";
} catch (PDOException $err) {
    die($err);
}