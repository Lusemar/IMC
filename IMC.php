<!--
Autor: Lusemar Oliveira
Projeto: Consulta IMC
Data: 09/21/2020
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Cálculo IMC</title>
</head>

<body>
<h2>Cálculo de Índice de Massa Corporal</h2>
<form method="post" action="imc.php"> 
   Altura: <input type="text" name="altura">
   <br>
   Peso: <input type="text" id="peso" name="peso">
   <br><br>
   <input type="submit" name="submit" value="Calcular"> 
   <br><br>
</form>
<?php
 
$peso= ($_POST['peso']); 
$altura = ( $_POST['altura']);

$calcular = ($peso / (pow($altura,2)));

if ($calcular<=0):
	echo("");
elseif ($calcular>0 &&   $calcular<18.5):
	echo("Índice de Massa Corporal menor que 18.5, magreza elevada.");

elseif ($calcular>=18.5 && $calcular<25):
	echo("Índice de Massa Corporal normal.");

elseif ($calcular>=25 && $calcular<30):
	echo("Índice de Massa Corporal entre 25 e 29.9, sobrepeso elevado.");

elseif ($calcular>=30 && $calcular<40):
	echo("Índice de Massa Corporal entre 30 e 39.9, obesidade elevada.");

else: 
	echo("Índice de Massa Corporal maior ou igual a 40 obesidade grave, muitíssima elevada.");
endif;

?>
</body>
</html>
