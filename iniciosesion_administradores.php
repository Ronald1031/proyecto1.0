<?php
  $co=$_POST["codigo"];
  $c=$_POST["correo"];
  $p=$_POST["clave"];

  $con=mysqli_connect("localhost","root","","proyecto");
  if ($con==true) {
    //echo "Conexion exitosa";
  }
  else {
    echo "error";
  }

  $result=mysqli_query($con,"select * from registro_administradores where correo='$c'and clave='$p';");

    while($fila=mysqli_fetch_row($result)){

      /*echo*/ $correo=$fila[0];
      /*echo*/ $pass=$fila[1];
      /*echo*/ $con=$fila[2];
    }
    if ($con==$p) {
      echo "<script>alert('has iniciado sesion');
      windows.location.href='index.php';</script>";
      header("location:pajina_administradores.html");
    }
    else {
      echo "<script>alert('Error en los datos');
      windows.location.href='sesion_admin.html';</script>";
      //header("location:sesion_admin.html");
    }
      ?>
