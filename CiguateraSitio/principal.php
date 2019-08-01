<!DOCTYPE html>
<html>
	<head>
		<title>Prueba base de datos</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		<tr class="h3">
		    <th class="text-center">Id</th>
		    <th>Nombre</th>
		    <th>Imagen</th>
            <th>Descripcion</th>
            <th>Tamanio</th>
		    <th>Color</th>
		    <th class="text-center"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success"></button></th>
		</tr>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'conexion.php';
		    $query="SELECT * FROM peces";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				$id=$row["id_peces"];
				$nombre=$row["nombre"];
				$imagen=$row["imagen"];
				$descripcion=$row["descripcion"];
                $tamanio=$row["tamanio"];
                $color=$row["color"];
				echo "<tr><td class='text-center'>$id</td>";
				echo "<td>$nombre</td>";
				echo "<td>$imagen</td>";
				echo "<td>$descripcion</td>";
                echo "<td>$tamanio</td>";
                echo "<td>$color</td>";
				echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button>";
				echo "<input value='$id' type='hidden' id='tm$id'>";	
				echo "<input value='$id' type='hidden' id='te$id'>";		
				echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id'></button></td></tr>";
		    }
		    } else {}
		    ?>
	    </tbody>
	</table>
	</div> 
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conecta.js"></script>	
</html>
