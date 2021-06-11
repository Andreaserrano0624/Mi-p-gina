<?php
$usuario=$_POST['usuario'];
$usuario=$_POST['contraseña'];

//conectar a la base de datos

$conexion=mysqli_connect("localhost","root","","db_pagina");
$consulta="SELECT * FROM usuarios WHERE usuarios='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:index.html");

}
else{
    echo"Error en la autentificación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);