<?php

$conexion=mysqli_connect("localhost","root","123","test");
  if ($conexion->connect_error) {
        echo "No sea podido conectar la base de datos" .$conn->connect_error;
  }
 ?>