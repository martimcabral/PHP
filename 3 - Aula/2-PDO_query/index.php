<?php

require_once 'config.php';

try {
    $conn = new PDO($dst, $utilizador, $password);
	
	// executa a query
    $sql = 'select * from tarefas';
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // processa os resultados
    $tasks = [];
    while ($row = $stmt->fetch()) {
        $tasks[] = [
            'tarefa' => $row['tarefa'], 
            'terminada' => $row['terminada'] == 0 ? false : true
        ];
    }
    
    // apresenta a lista de resultados $tasks[]
    require 'select.view.php';

} catch (PDOException $err) {
    die("A ligação ao servidor $servidor falhou com o erro: " . $err->getMessage());
}
?> 