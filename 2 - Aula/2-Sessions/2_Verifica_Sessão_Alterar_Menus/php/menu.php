<div class="menu" id="menu">
	<a href="#home" class="active">Home</a>	
	<a href="#novidades">Novidades</a>
	<a href="#contatos">Contatos</a>
	<a href="#acerca">Acerca</a>
<!--Verifica se existe sessão (utilizador validado) se não existir mostra botão Login senão mostra Olá, utilizador -->
<?php
	if (!isset($_SESSION['nome'])) {
		echo '<a href="./php/login.php" class="direita">Login</a>';
		} else {
		echo '<a href="./php/logout.php" class="direita">Logout</a>';
		echo '<a href="" class="direita">Olá, '.$_SESSION['nome'].'</a>';
		}
?>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="minhaFuncao()">&#9776;</a>
</div>

<script>
function minhaFuncao() {
    var x = document.getElementById("menu");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
}
</script>