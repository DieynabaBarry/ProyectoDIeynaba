<?php
$conexion=mysqli_connect("localhost","root","","roles");

if(isset($_SESSION["usuario"])){
    header("Location : perfil.php");
}
if(isset($_POST["submit"])){
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usuario"];
    $contraseña=md5($_POST["contraseña"]);
    $ccontraseña=md5($_POST["ccontraseña"]);
}
if($contraseña==$ccontraseña){
    $sql="INSERT INTO usuario (nombre, usuario, contraseña,2)";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo "<script>alert('Usuario registrado con exito')</script>";
    }else{
        echo "<script>alert('Hay un error')</script>";
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="stylelogreg.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form" >
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
    <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
    <input class="controls" type="password" name="ccontraseña" id="ccontraseña" placeholder="Ingrese su Contraseña de nuevo">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" method="post">
    <p><a href="Login.php">¿Ya tengo Cuenta?</a></p>
  </section>

</body>
