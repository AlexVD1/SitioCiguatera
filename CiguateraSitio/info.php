<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciguatera</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="icon/styles.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/botonflotante.css">
    <link rel="stylesheet" href="css/estiloslide.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/estilos-otras.css">
    
</head>
<body>
    <header class="header">
        <div class="contenedor imp">
            <h1 class="logo">Ciguatera</h1>
            <span class="icon-bars" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu_item"><a class="menu_link" href="index.php">Inicio</a></li>
                    <li class="menu_item"><a class="menu_link " href="">Categor&iacute;as</a>
                    
                    
                    <ul class="">
                        <li class=""><a href="" class="">Articulos</a></li>
                        <li class=""><a href="" class="">Zonas</a></li>
                        <li class=""><a href="" class="">Peces</a></li>
                    </ul>
                    
                    
                    </li>
                    <li class="menu_item"><a class="menu_link" href="">¿Qu&eacute; es?</a></li>
                    <li class="menu_item"><a class="menu_link" href="">Contacto</a></li>
                    <li class="menu_item"><a href="" class="menu_link">Configurar</a></li>
                </ul>
            </nav>
        </div>
    </header>  
    
   <div class="flotante">
       <a class="btn-flotanteh" href="#">Descargar Art&iacute;culo PDF</a>
   </div> 

   <div class="titulo-otras">
          <h2 class="section_titulo">Variable: Autor o Pez, mostrando su nombre </h2>
   </div>
   <section id="info">
   <div class="imagencentro">
       <img class="imgajust" src="imgs/fondomar.jpg" alt="">
   </div>
   <div class="etiquetas">
       <?php
       for($i=1;$i<=10;i++)
       echo '<a href="" class="etiqueta">etiqueta'.$i.'</a>';     
       ?>
   </div>
    <h2 class="centrado">Lorem ipsum dolor.</h2>
   <div class="info">
       <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati placeat quaerat sit esse suscipit commodi, labore natus vitae impedit quam hic doloremque tenetur consectetur eum architecto ea a repellendus quos. Molestiae quos nihil incidunt nam blanditiis at deleniti ullam alias repudiandae iste, placeat error doloremque necessitatibus ipsum, commodi, dolores tempora.</p>
   </div>
   </section>
   
   
   
   
   
   
   
   
   
   
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
</body>
</html>