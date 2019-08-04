<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciguatera</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="icon/styles.css">
    <link rel="stylesheet" href="css/estiloslide.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/estilos-otras.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/modificar.css">
    <link rel="stylesheet" href="icon/icono-especial/styles.css">


    <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
    
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
            <h1 class="logo">InfoCigua</h1>
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
                   <li class="menu_item"><a href="iniciarsesion.php" id="" class="menu_link icon-wrench"></a></li>
                </ul>
            </nav>
        </div>
    </header> 
    

   
   <div class="titulo-otras">
          <h2 class="section_titulo">Zonas con el problema mas latente</h2>
   </div>
    <div class="contanier">
      
   <main class="main">
        <div class="contenedor">
            <section class="slider">
                                    <div class="content-img" id="img1">
                                        <a href="#img4" class="icon-izquierda"></a>
                                        <img src="imgs/mapa.jpg">
                                        <a href="#img2" class="icon-derecha"></a>
                                    </div>
                                    
                                    <div class="content-img" id="img2">
                                        <a href="#img1" class="icon-izquierda"></a>
                                        <img src="imgs/caribe.jpg">
                                        <a href="#img3" class="icon-derecha"></a>
                                        <div class="content-details">
                                            <h3 class="info_titulo">Caribe </h3>
                                            <p class="info_txt">Paises que lo conforman...</p>
                                            <input type="button" value="Ver"><br><br>
                                        </div>
                                    </div>
                                    
                                    <div class="content-img" id="img3">
                                        <a href="#img2" class="icon-izquierda"></a>
                                        <img src="imgs/golfo.jpg">
                                        <a href="#img4" class="icon-derecha"></a>
                                        <div class="content-details">
                                            <h3 class="info_titulo">Golfo </h3>
                                            <p class="info_txt">Paises que lo conforman...</p>
                                            <input type="button" value="Ver"><br><br>
                                        </div>
                                    </div>
                                    <div class="content-img" id="img4">
                                        <a href="#img3" class="icon-izquierda"></a>
                                        <img src="imgs/salvador.jpg">
                                        <a href="#img1" class="icon-derecha"></a>
                                        <div class="content-details">
                                            <h3 class="info_titulo">América Central </h3>
                                            <p class="info_txt">Paises que lo conforman...</p>
                                            <input type="button" value="Ver"><br><br>
                                        </div>
                                    </div>
                                    
            </section>
            
            
        </div>    
    </main>
   
        
         <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Zona caribe
            </h2>
            <h3 class="post-subtitle">
              Colombia, Antigua y Barbuda, Las Bahamas, Barbados, Belice, Costa Rica, Cuba, Dominica, República Dominicana, El Salvador, Granada, Guatemala, Guyana, Haití, Honduras, México, Jamaica, Nicaragua, Panamá, St. Kitts y Nevis, Santa Lucía, San Vicente y las Granadinas, Surinam, Trinidad y Tobago, y Venezuela.
            </h3>
          </a>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
             Golfo
            </h2>
              <h3 class="post-subtitle"> México</h3>
          </a>
          
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Centroamérica
            </h2>
            <h3 class="post-subtitle">
             Guatemala, Belice, Honduras, El Salvador, Nicaragua, Costa Rica y Panamá.
            </h3>
          </a>
          
        </div>
        <hr>
        
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Inicio &rarr;</a>
        </div>
      </div>
    </div>
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
    <script src="js/btn-flotante.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
    
            <script src="js/login.js"></script>
    <script src="js/btn-flotante.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>