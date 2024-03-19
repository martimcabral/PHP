<?php
require_once 'config.php';

try {
    $conn = new PDO($dst, $utilizador, $password);
        
    $sql = 'update tarefas 
            set terminada=:terminada
            where id=:id';
    
    $stmt = $conn->prepare($sql);
    
    $stmt->execute([':terminada' => 0, ':id' => 1]);
	echo "Registo atualizado com sucesso!";
} catch (PDOException $err) {
    die($err);
}
?>