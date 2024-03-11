<html>
<head>
<title>Qual o numero</title>
</head>
<body>
<h1>Adivinhe o numero</h1>

<script Language="JavaScript">

var num=Math.round(100*(Math.random())); //Calcula numero aleatorio
var num_in,x=50,tentativas=0; //Variaveis auxiliares

while (true)
	{
	num_in=prompt("O numero e: (0-100):"),x;
	tentativas++; //Incrementa o numero de tentativas
	if (num_in==num) break; //Saida do ciclo

	if (num_in>num) {
			alert ("Muito grande! Tente de novo...");
			}
			else
			{
			alert ("Muito pequeno! Tente de novo...");
			}
	x=num_in;
	}

document.write("<h3>Numero:",num,"<p></h3>");
document.write("<h4>Acertou em ",tentativas," tentativas<p></h4>");
</script>

<h4>F5 para jogar outra vez!</h4>
</body>
</html>
