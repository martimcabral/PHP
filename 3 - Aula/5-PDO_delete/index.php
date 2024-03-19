<?php
require_once 'config.php';

try {
    $conn = new PDO($dst, $utilizador, $password);
        
    $sql = 'delete from tarefas where id =:id';
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => 5]);
	echo "Registo apagado com sucesso!";
} catch (PDOException $err) {
    die($err);
}
?>