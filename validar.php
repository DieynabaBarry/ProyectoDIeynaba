<?php
 $usuario=$_POST['usuario'];
 $contraseña=$_POST['contraseña'];
 session_start();
 $_SESSION['usuario']=$usuario;

 $conexion=mysqli_connect("localhost","root","","roles");

 $consulta="SELECT*FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña'";
 $resultado=mysqli_query($conexion,$consulta);
 $filas= mysqli_fetch_array($resultado);

 if($filas['id_cargo']==1){
     header("location:perfilADMIN.php");
 }else if($filas['id_cargo']==2){
    header("location:perfil.php");
}
 
 else{
     ?>
    <?php
    include("Login.php");
     ?>
    <h1 class="bad"> usuario o contraseña erronea</h1>
    <?php
 }
 mysqli_free_result($resultado);
 mysqli_close($conexion);
 ?>