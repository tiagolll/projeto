

<?php 


$q4 = $_GET['q4'];
setcookie('q4', $q4);

$C1 = $_COOKIE['q1'];
$C2 = $_COOKIE['q2'];
$C3 = $_COOKIE['q3'];

$c = 0;

if ($C1 == 'C') {
	$c++;
}
if($C2 == 'E'){
	$c++;
}
if ($C3 == 'C') {
	$c++;
}
if ($q4 == 'E') {
	$c++;
}
 
echo "Acertou ", $c,"/4.";

echo "<br><br>As respostas foram: <br>", $C1, "<br>", $C2, "<br>", $C3, "<br>", $q4, "<br>";

?>

<br><a href="q1.php"><button>VOLTAR</button></a>
