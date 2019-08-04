<?php
$usuario="Alex";
$contrasenia="1234";

$h="localhost";
$u="root";
$p="";
$bd="infocigua";

$conexion = mysqli_connect($h, $u, $p,$bd);

$consulta="SELECT * FROM usuarios WHERE usuario='".$usuario."' AND pass='".$contrasenia."'";

$resultado=mysqli_query($conexion, $consulta); 

$filas=mysqli_num_rows($resultado);

if($filas->num_rows > 0)
{
   header("location:index.php");
}
else
{
    header("location:s.php");    
}


?>