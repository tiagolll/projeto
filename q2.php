<?php
$q1 = $_GET["q1"];
setcookie('q1', $q1);


?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>FORMULÁRIO</title>
</head>
<body>
	<form method="get" action="q3.php">
		A Secretaria de Saude de um municipio avalia um programa que disponibiliza, para cada aluno de uma escola municipal, uma bicicleta, que deve ser usada no trajeto de ida e volta, entre sua casa e a escola. Na fase de implantacao do programa, o aluno que morava mais distante da escola realizou sempre o mesmo trajeto, representado na figura, na escala 1:25 000, por um periodo de cinco dias.<br>

		<a> 
			<img align="top" src="https://www.enemvirtual.com.br/uploadedfiles/uploads/2013/12/enem-matematica-300x263.jpg" height="120" width="180"> 
		</a><br>
		<b>2) Quantos quilometros esse aluno percorreu na fase de implantacao do programa?</b>

		<p>
			<input type= "radio" name="q2" value="A"> 4 <br>
			<input type= "radio" name="q2" value="B"> 8 <br>
			<input type= "radio" name="q2" value="C"> 16 <br>
			<input type= "radio" name="q2" value="D"> 20 <br>
			<input type= "radio" name="q2" value="E"> 40 <br>
		</p>

		<br><br>



Resposta E



		<input type="submit" value="Enviar" name="submit_button"> <br>

		<input type="reset" value="Apagar" name="reset_button"> </br>

	</form>

</body>
</html>