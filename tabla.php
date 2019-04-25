<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRO DE SALAS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link href="./styleform.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/form-search.css">
    <script src="assets/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="estilos.css">
  </head>
 <body> 
    <h1 id="title" style="display: block; font-size: 35px; margin-block-start: 0.67em; margin-block-end: 0.67em; margin-inline-start: 0px; margin-inline-end: 0px;  font-weight: bold;">REGISTRO DE SALAS</h1>

    <ul class="ul1">
        <li class="li1"><a href="index.html" >Registrar usuario</a></li>
        <li class="li1"><a href="eliminar.html">Eliminar Sala</a></li>
		<li class="li1"><a href="actualizar.html">Modificar Sala</a></li>
        <li class="li1"><a href="tabla.php"  class="active">Tabla de registros</a></li>
    </ul>
 
    <div class="table-responsive" style="background-color:white;margin:20px; ;width:97%">
       <table class="table table-hover">
		<thead>
		 <tr>
             <th scope="col">Id_sala_juntas</th>
             <th scope="col">nombre_usuario</th>
             <th scope="col">fecha</th>
             <th scope="col">hora</th>
             <th scope="col">sala_de_juntas</th>
             <th scope="col">tiempo_uso</th>
             <th scope="col">total_personas</th>
         </tr> 
        </thead>
         <tbody>
             <?php
						$con = mysql_connect('localhost','root','') 
						or die('No se pudo conectar al servidor.');
						 
						// Eligir mi base de datos creada
						mysql_select_db('servipro') 
							or die('Error al seleccionar base de datos.');
						 
						  
						// Seleccionar los datos de la tabla clientes
						$sql = "SELECT * FROM sala_juntas;";
						 
						// Ejecutar instruccion
						$result = mysql_query($sql) 
							or die('ocurrió un error al cargar los datos: ' . mysql_error());
						 
						// get result count:
						$count = mysql_num_rows($result);
						//print "Showing $count rows:<hr/>";
						 
						// fetch results:
						 
						while ($row = mysql_fetch_assoc($result)) {
							echo "<tr>";
							
							echo "<td>".$row['id_sala_juntas']."</td>"; 
							echo "<td>".$row['nombre_usuario']."</td>";
							echo "<td>".$row['fecha']."</td>";
							echo "<td>".$row['hora']."</td>";
							echo "<td>".$row['sala_de_juntas']."</td>"; 
							echo "<td>".$row['tiempo_uso']."</td>"; 
							echo "<td>".$row['total_personas']."</td>"; 
							
							echo "</tr>";
						}
						 
             ?>
		 </tbody>
        </table>
       </div>
    </body>
</html>












