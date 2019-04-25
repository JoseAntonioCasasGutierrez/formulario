<?php
     include 'cn.php';
     //recibir los datos 
     $nombre = $_POST["nombre_usuario"];
	
	 $sala = $_POST["sala_de_juntas"];
	 

     
     //incriptacion de password
     //$contrasenaUsuario= md5($contrasena);
     //consulta para insertar
     $insertar = "UPDATE sala_juntas set  nombre_usuario='$nombre_usuario'  where sala_de_juntas='$sala'";
     // ejecutar consultar
     $resultado = mysqli_query($conexion, $insertar);
     if (!$resultado) {
 	 echo 'Error';
	 header("location:actualizar.html");
     }else {
	 echo 'Sala de Juntas actualizado exitosamente';
	 header("location:tabla.php");
     }
     //cerrar conexion
   
     mysqli_close($conexion);