<?php
$q2 = $_GET["q2"];
setcookie('q2', $q2);	

?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>FORMULÁRIO</title>
</head>
<body>
	<form method="get" action="q4.php">
		Empresa vai fornecer 230 turbinas para o segundo complexo de energia a base de ventos, no sudeste da Bahia. O Complexo Eolico Alto Sertao, em 2014, tera capacidade para gerar 375 MW (megawatts), total suficiente para abastecer uma cidade de 3 milhoes de habitantes.
		<br>

		
		<b>3) A opcao tecnologica retratada na noticia proporciona a seguinte consequencia para o sistema energetico brasileiro:</b>

		<p>
			<input type= "radio" name="q3" value="A">  Reducao da utilizacao eletrica. <br>
			<input type= "radio" name="q3" value="B">  Ampliacao do uso bioenergetico.<br>
			<input type= "radio" name="q3" value="C">  Expansao das fontes renovaveis. <br>
			<input type= "radio" name="q3" value="D">  Contencao da demanda urbano-industrial.<br>
			<input type= "radio" name="q3" value="E">  Intensificacao da dependencia geotermica.<br>
		</p>

		<br><br>


Resposta C




		<input type="submit" value="Enviar" name="submit_button"> <br>

		<input type="reset" value="Apagar" name="reset_button"> </br>

	</form>

</body>
</html>