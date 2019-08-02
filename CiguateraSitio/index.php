<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>InfoCigua</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="icon/styles.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/botonflotante.css">
    <link rel="stylesheet" href="css/estiloslide.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
   <div class="flotante">
       <a class="btn-flotanteh" id="btn-flotante">Buscar Art&iacute;culos</a>
   </div>
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
					<button class="" id="btn-login" type="submit">Iniciar Sesión</button>	
				</div>
				<div class="footer">
					<h3>&copy;InfoCigua - 2019</h3>
				</div>
			</div>
		</div>
	</div>
    <div id="tablas" class="flotantet">
            <form class="form-estilo">
                  <input class="input-buscar" type="search" placeholder="BUSCAR" aria-label="Search">
                  <button class="btn-buscar" type="submit">BUSCAR</button>
            </form>
            
             <table border="1" id="Articulos">
              <?php
		    include 'conexion.php';
		    $query="SELECT * FROM articulos";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				$id_articulos=$row["id_articulos"];
				$img_autor=$row["img_autor"];
				$titulo=$row["titulo"];
				$descripcion_art=$row["descripcion_art"];
                $img_articulo=$row["img_articulo"];
				echo "<tr><td>$id_articulos</td>";
				echo "<td>$img_autor</td>";
				echo "<td>$titulo</td>";
				echo "<td>$descripcion_art</td>";
                echo "<td>$img_articulo</td></tr>";
				//echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button>";
				//echo "<input value='$id_articulos' type='hidden' id='tm$id_articulos'>";	
				//echo "<input value='$id_articulos' type='hidden' id='te$id_articulos'>";		
				//echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id_articulos'></button></td></tr>";
		    }
		    } else {}
		    ?>
            </table>
            
        </div>
   
   
    <header class="header">
        <div class="contenedor imp">
            <h1 class="logo">InfoCigua</h1>
            <span class="icon-bars" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu_item"><a class="menu_link select" href="">Inicio</a></li>
                    <li class="menu_item"><a class="menu_link" href="">Categor&iacute;as</a>
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
    
    <div class="banner">
        <img src="imgs/fondomar3.jpg" alt="" class="banner_img">
        <div class="contenedor">
            <h2 class="banner_titulo">Intoxicaci&oacute;n por Ciguatera</h2>
            <p class="banner_txt">Informarte es nuestra prioridad</p>
        </div>
    </div>
    
    <main class="main">
        <div class="contenedor">
            <section class="slider">
                                    <div class="content-img" id="img1">
                                        <a href="#img5" class="icon-left-open"></a>
                                        <img src="imgs/fondomar3.jpg">
                                        <a href="#img2" class="icon-right-open"></a>
                                    </div>
                                    
                                    <div class="content-img" id="img2">
                                        <a href="#img1" class="icon-left-open"></a>
                                        <img src="imgs/fondomar.jpg">
                                        <a href="#img3" class="icon-right-open"></a>
                                        <div class="content-details">
                                            <h3 class="info_titulo">Titulo de la investigaci&oacute;n</h3>
                                            <p class="info_txt">Resumen de la investigaci&oacute;n</p>
                                            <input type="button" value="Ver más"><br><br>
                                        </div>
                                    </div>
                                    
                                    <div class="content-img" id="img3">
                                        <a href="#img2" class="icon-left-open"></a>
                                        <img src="imgs/pez1.jpg">
                                        <a href="#img4" class="icon-right-open"></a>
                                    </div>
                                    <div class="content-img" id="img4">
                                        <a href="#img3" class="icon-left-open"></a>
                                        <img src="imgs/pez2.jpg">
                                        <a href="#img5" class="icon-right-open"></a>
                                    </div>
                                    <div class="content-img" id="img5">
                                        <a href="#img4" class="icon-left-open"></a>
                                        <img src="imgs/pez3.jpg">
                                        <a href="#img1" class="icon-right-open"></a>
                                    </div>
            </section>
            
            <section class="cursos">
                <h2 class="section_titulo">Categor&iacute;as</h2>
                <div class="cursos_columna">
                    <img src="imgs/pez2.jpg" alt="" class="cursos_img">
                    <div class="cursos_descripcion">
                        <h3 class="cursos_titulo">TITULO X</h3>
                        <p class="cursos_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt?</p>
                    </div>
                </div>
                <div class="cursos_columna">
                    <img src="imgs/pez2.jpg" alt="" class="cursos_img">
                    <div class="cursos_descripcion">
                        <h3 class="cursos_titulo">TITULO X</h3>
                        <p class="cursos_txt">Modi, sequi, consectetur. Eius non deserunt quidem voluptate temporibus!</p>
                    </div>
                </div>
                <div class="cursos_columna">
                    <img src="imgs/pez2.jpg" alt="" class="cursos_img">
                    <div class="cursos_descripcion">
                        <h3 class="cursos_titulo">TITULO X</h3>
                        <p class="cursos_txt">Ab, suscipit, voluptates. Nihil eveniet, voluptates illum voluptatem natus.</p>
                    </div>
                </div>
                <div class="cursos_columna">
                    <img src="imgs/pez2.jpg" alt="" class="cursos_img">
                    <div class="cursos_descripcion">
                        <h3 class="cursos_titulo">TITULO X</h3>
                        <p class="cursos_txt">Quibusdam, nisi eligendi tempore quasi placeat dignissimos accusamus molestiae.</p>
                    </div>
                </div>
            </section>
        </div>    
    </main>
    
    
    <footer class="footer">
        <div class="social">
            <a href="" class="icon-facebook"></a>
            <a href="" class="icon-mail"></a>
            <a href="" class="icon-twitter"></a>
        </div>
        <p class="copy">&copy; Ciguatera-2019</p>
    </footer>
    
    
    <script src="js/btn-flotante.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/login.js"></script>
</body>
</html>