<?php
  
  $usuario=$_POST['usuario'];
  $contrasena=$_POST['contrasena'];

  //conexion
  include 'cn.php';
  $consulta="SELECT * FROM usuario WHERE usuario='$usuario' and contrasena='$contrasena'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_num_rows($resultado);

  if($filas>0){
	header("location:sala_juntas.html");
  }
  else{
	header("location:registro.html");
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);
