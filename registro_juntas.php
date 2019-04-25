<?php
     include 'cn.php';
     //recibir los datos 
     $nombre_usuario = $_POST["nombre_usuario"];
     $fecha = $_POST["fecha"];
     $hora = $_POST["hora"];
     $sala= $_POST["sala_de_juntas"];
     $tiempo= $_POST["tiempo_uso"];
     $total= $_POST["total_personas"];
     //incriptacion de password
     //$contrasenaUsuario= md5($contrasena);
     //consulta para insertar
     $insertar = "INSERT INTO sala_juntas(nombre_usuario,fecha,hora,sala_de_juntas,tiempo_uso,total_personas) VALUES ('$nombre_usuario','$fecha','$hora','$sala','$tiempo','$total')";
     // ejecutar consultar
     $resultado = mysqli_query($conexion, $insertar);
     if (!$resultado) {
 	 echo 'Error';
	 header("location:sala_juntas.html");
     }else {
	 echo 'Sala de Juntas registrado exitosamente';
	 header("location:tabla.php");
     }
     //cerrar conexion
   
     mysqli_close($conexion);