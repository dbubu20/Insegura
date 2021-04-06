<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect('localhost','root','123','test');
$consulta="SELECT * FROM t_login where Contrasena='$contraseña' and Usuario='$usuario'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");
  
}else{
    ?>
    <?php
    include("index.html");
  
  ?>
  <h1 class="bad">ERROR DE AUTENTICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
