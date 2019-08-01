<?php
session_start();
include 'conexionWatson.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Starter Application</title>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<link rel=”stylesheet” href=”style.css” />
</head>
<body>

<?php

$watson = new Conexion_Watson();
$watson->set_credenciales("apikey","_JXBIE5n36Piyn6yzrgADeKcjv8_4A1NHug91PtzXUav");

// define variables and set to empty values
$Pregunta = "";
$respuesta = "";

 

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Pregunta = test_input($_POST["Pregunta"]);
$respuesta = $watson->Enviar_Pregunta($Pregunta, "c2428482-7370-4323-b13d-e6ffe03a7d85");
$watson->set_contexto(json_encode($respuesta['context']));

echo $respuesta['output']['text'][0];
echo "<br><br>";
echo json_encode($respuesta);
}

?>
<table>
<tr>
<td style='width:50%;'>
</td>
<td>
<h2>ChatBot</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="Pregunta"> 
<input type="submit" name="submit" value="Submit">
</form>
</td>
</tr>
</table>
</body>
</html>