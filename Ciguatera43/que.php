<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>InfoCigua</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="icon/styles.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/botonflotante.css">
    <link rel="stylesheet" href="css/estiloslide.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/estilos-otras.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/modificar.css">


</head>
<body>
  <div id="miModal" class="modal">
		<div class="flex" id="flex">
			<div class="contenido-modal">
				<div class="modal-header flex">
					<h2>Iniciar Sesión</h2>
					<span class="close" id="close">&times;</span>
				</div>
				<div class="modal-body">
					<label for="Hola">Usuario</label>
					<input class="input-buscar" id="usuario" type="text">		
					<label for="Hola">Contraseña</label>
					<input class="input-buscar" id="contraseña"type="password">	
					<button class="btn-modal" id="btn-login" type="submit">Iniciar Sesión</button>	
				</div>
				<div class="footer">
					<h3>&copy;InfoCigua - 2019</h3>
				</div>
			</div>
		</div>
	</div>
  <div id="ModalMod" class="modal">
		<div class="flex" id="flexm">
			<div class="contenido-modal">
				<div class="modal-header flex">
					<h2>Modificar Principal</h2>
					<span class="close" id="closem">&times;</span>
				</div>
				
				<div class="modal-body">
				<label for="">Logo: </label>	
				<input class="input-buscar" type="text" id="logo">
				<label for="">Titulo: </label>	
				<input class="input-buscar" type="text" id="titulo">
				<label for="">Lema: </label>	
				<input class="input-buscar" type="text" id="lema">
				<label for="">Imagen: </label>	
				<input class="input-buscar" type="text" id="imagen">			
				</div>
				
				
				<div class="footer">
					<h3>&copy;InfoCigua - 2019</h3>
				</div>
			</div>
		</div>
	</div> 
   <header class="header">
        <div class="contenedor imp">
            <h1 class="logo">InfoCigua   <span id="mod-nom" class="nom icon-wrench"></span></h1>
            <span class="icon-bars" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu_item"><a class="menu_link" href="index.php">Inicio</a></li>
                    <li class="menu_item"><a class="menu_link" href="">Categor&iacute;as</a>
                    
                    
                    <ul class="">
                        <li class=""><a href="articulos.php" class="">Articulos</a></li>
                        <li class=""><a href="zonas.php" class="">Zonas</a></li>
                        <li class=""><a href="peces.php" class="">Peces</a></li>
                    </ul>
                    
                    
                    </li>
                    <li class="menu_item"><a class="menu_link select" href="que.php">¿Qu&eacute; es?</a></li>
                    <li class="menu_item"><a class="menu_link" href="contacto.php">Contacto</a></li>
                    <li class="menu_item"><span id="abrir"  class="menu_link icon-wrench"></span></li>
                </ul>
            </nav>
        </div>
    </header>   

   
   <div class="titulo-otras">
          <h2 class="section_titulo">¿Qu&eacute; es?</h2>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
    <footer class="footer">
        <div class="social">
            <a href="" class="icon-facebook"></a>
            <a href="" class="icon-mail"></a>
            <a href="" class="icon-twitter"></a>
        </div>
        <p class="copy">&copy; InfoCigua-2019</p>
    </footer>
        <script src="js/modificar.js"></script>
        <script src="js/login.js"></script>
    <script src="js/btn-flotante.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>