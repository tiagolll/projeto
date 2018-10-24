<?php
$q3 = $_GET["q3"];
setcookie('q3', $q3);	

?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>FORMULÁRIO</title>
</head>
<body>
	<form method="get" action="todas.php">
		<b>4) O chuveiro eletrico e um dispositivo capaz de transformar energia eletrica em energia termica, o que possibilita a elevacao de temperatura da agua. Um chuveiro projetado para funcionar em 110 V pode ser adaptado para funcionar em 220 V de modo a manter inalterada sua potencia. Uma das maneiras de fazer esta adaptacao e trocar a resistencia do chuveiro por outra de mesmo material e com o(a):</b>
		<br>

		
		<p>
			<input type= "radio" name="q4" value="A">  Dobro do comprimento do fio. <br>
			<input type= "radio" name="q4" value="B">  Metade do comprimento do fio.<br>
			<input type= "radio" name="q4" value="C">  Metade da area de secao reta do fio.<br>
			<input type= "radio" name="q4" value="D">  Quadruplo da area de secao reta do fio.<br>
			<input type= "radio" name="q4" value="E">  Quarta parte da area da secao reta do fio.<br>
		</p>

		<br><br>


		Resposta E




		<input type="submit" value="Enviar" action="c4.php" name="submit_button"> <br>

		<input type="reset" value="Apagar" name="reset_button"> </br>

	</form>

</body>
</html>