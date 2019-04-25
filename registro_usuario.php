<?php
  include 'cn.php';
  //recibir los datos 
  $nombre_usuario = $_POST["nombre_usuario"];
  $usuario = $_POST["usuario"];
  $contrasena = $_POST["contrasena"];
 
  
  //incriptacion de password
    //$contrasenaUsuario= md5($contrasena);
  //consulta para insertar
  $insertar = "INSERT INTO usuario (nombre_usuario,usuario, contrasena) VALUES ('$nombre_usuario','$usuario','$contrasena')";
  // ejecutar consultar
  $resultado = mysqli_query($conexion, $insertar);
  if (!$resultado) {
 	 echo 'Error';
  }else {
	echo 'Usuario registrado exitosamente';
	header("location:index.html");
  }
  //cerrar conexion
  mysqli_close($conexion);