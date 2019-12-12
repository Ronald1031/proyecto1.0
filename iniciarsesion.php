<?php
  $c=$_POST["correo"];
  $p=$_POST["contraseña"];

  $con=mysqli_connect("localhost","root","","proyecto");
  if ($con==true) {
    //echo "Conexion exitosa";
  }
  else {
    echo "error";
  }

  $result=mysqli_query($con,"select * from registro_usuarios where correo='$c'and clave='$p';");

    while($fila=mysqli_fetch_row($result)){
      /*echo*/ $correo=$fila[0];
      /*echo*/ $pass=$fila[1];
      /*echo*/ $con=$fila[2];
    }
    if ($con==$p) {
      echo "<script>alert('has iniciado sesion');
      windows.location.href='index.php';</script>";
      header("location:carrito.php");
    }
    else {
      echo "<script>alert('Error en los datos');
      windows.location.href='registro.html';</script>";
    }
      ?>
