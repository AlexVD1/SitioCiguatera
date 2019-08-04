
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>InfoCigua</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos-otras.css">
    <link rel="stylesheet" href="icon/styles.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/botonflotante.css">
    <link rel="stylesheet" href="css/estiloslide.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="icon/icono-especial/styles.css">
    <link rel="stylesheet" href="css/btnmod.css">

</head>
<body>
   <header class="header">
        <div class="contenedor imp">
            <h1 class="logo">InfoCigua</h1>
            <span class="icon-bars" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu_item"><a class="menu_link" href="index.php">Inicio</a></li>
                    <li class="menu_item"><a class="menu_link select" href="">Categor&iacute;as</a>
                    
                    
                    <ul class="">
                        <li class=""><a href="articulos.php" class="">Articulos</a></li>
                        <li class=""><a href="zonas.php" class="">Zonas</a></li>
                        <li class=""><a href="peces.php" class="">Peces</a></li>
                    </ul>
                    
                    
                    </li>
                    <li class="menu_item"><a class="menu_link" href="que.php">¿Qu&eacute; es?</a></li>
                    <li class="menu_item"><a class="menu_link" href="contacto.php">Contacto</a></li>
                    <li class="menu_item"><span id="abrir" class="menu_link icon-wrench"></span></li>
                </ul>
            </nav>
        </div>
    </header> 
   
		<div class="separador" id="">
			<div class="contenido-modal ">
				<div class="modal-header flex">
					<h2>Iniciar Sesión</h2>
				</div>
				<div class="modal-body">
				
				<form action="#" method="post">
					<label for="">Usuario</label>
					<input class="input-buscar" name="usuario" type="text">		
					<label for="">Contraseña</label>
					<input class="input-buscar" name="contraseña" type="password">	
					<button class="btn-modal" href="" type="submit">Iniciar Sesión</button>	
				</form>
				
				
				<?php
                session_start();
                if(!empty($_SESSION['usuario'])){
                   ?>

                  <a href="cerrar_sesion.php" class="">Ya tienes una sesion iniciada, cierrala aqu&iacute;.</a>

                <?php
                }else{

                if(!empty($_POST['usuario']) && (!empty($_POST['contraseña']))) {
                    include_once "conexion.php";
                    $usuario=htmlentities($_POST['usuario']);
                    $password=htmlentities($_POST['contraseña']);

                    $usuario=mysqli_real_escape_string($conexion,$usuario);
                    $password=mysqli_real_escape_string($conexion,$password);

                    $sql="SELECT usuario,contrasenia FROM usuarios WHERE usuario='".$usuario."'";
                    $resultado=mysqli_query($conexion, $sql);   





                    if($resultado->num_rows>0){

                       $row = mysqli_fetch_array($resultado, MYSQLI_BOTH);

                       $contrasena=$row["contrasenia"];

                       mysqli_free_result($resultado);

                        $contrasena1=password_verify($password,$contrasena);

                       ?>
                                <?php
                                 if($contrasena1){
                            $_SESSION['usuario']=$usuario;
                            ?>
                              <a href="admin.php" class="">Sesi&oacute;n iniciada. Cierrala aqu&iacute;</a>
                        <?php   
                        }else{
                            ?>
                              <a href="index.php" class="alerta">No se pudo iniciar sesi&oacute;n por que la contrase&ntilde;a es incorrecta.</a>
                        <?php
                        }
                    }else{
                         ?>
                              <a href="" class="alerta">No se pudo iniciar sesi&oacute;n por que el usuario no existe.</a>
                        <?php
                    }
                }
                }
                ?>

				</div>
				<div class="footer">
					<h3>&copy;InfoCigua - 2019</h3>
				</div>
			</div>
		</div>
	 
    
    
    <footer class="footer">
        <div class="social">
            <a href="" class="icon-facebook"></a>
            <a href="" class="icon-mail"></a>
            <a href="" class="icon-twitter"></a>
        </div>
        <p class="copy">&copy; Ciguatera-2019</p>
    </footer>
    
    <script src="js/modificar.js"></script>
    <script src="js/btn-flotante.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/login.js"></script>
</body>
</html>