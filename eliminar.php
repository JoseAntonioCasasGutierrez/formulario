<?php
     include 'cn.php';
     //recibir los datos 
     $id_sala = $_POST["id_sala_juntas"];
     
     //incriptacion de password
     //$contrasenaUsuario= md5($contrasena);
     //consulta para insertar
     $insertar = "DELETE FROM sala_juntas WHERE id_sala_juntas = $id_sala";
     // ejecutar consultar
     $resultado = mysqli_query($conexion, $insertar);
     if (!$resultado) {
 	 echo 'Error';
	 header("location:eliminar.html");
     }else {
	 echo 'Sala de Juntas eliminado exitosamente';
	 header("location:tabla.php");
     }
     //cerrar conexion
   
     mysqli_close($conexion);