<?php
session_start();

$user=$_POST['usuario'];
$password=$_POST['contraseña'];

$h="localhost";
$u="root";
$p="";
$bd="prueba2";

$conexion = new mysqli($h, $u, $p,$bd);

$consulta="SELECT * FROM usuarios WHERE usuario='$user' AND pass='$password'";

$resultado=mysqli_query($conexion, $consulta); 

$filas=mysqli_num_rows($resultado);

if($filas > 0)
{
   header("location:index.php");
}
else
{
    header("location:index.php");    
}

$_SESSION['usuario']=$user;
$user=null;
$password=null;

?>