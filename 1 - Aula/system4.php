<link rel="stylesheet" href="style.css">

<?php // Este código direncia se o Utilizador está no EDGE ou no CHROME
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') == TRUE) {
        echo 'Está a utilizar o Edg.<br />';
    }  else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == TRUE) {
        echo 'Está a utilizar o Chrome.<br />';
    }  
?>

<br><br><br><br><a href="index.php"><< Voltar</a>