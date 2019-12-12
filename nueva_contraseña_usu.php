

  <?php

$correo=$_POST['correo'];
$c=$_POST['clave'];

$con=mysqli_connect("localhost","root","","proyecto");

if ($con==true) {
  // echo "Conexion exitosa";
}
else {
  echo "Error de Conexion";
}

$sql="update registro_usuarios set clave='$c' where correo='$correo'";
$result=mysqli_query($con,$sql);

if ($result==true) {
      echo "<script>alert('La contraseña se ha guardado satisfactoriamente');
      window.location.href='login.html';</script>";
}
else {
      echo "<script>alert('La contraseña no se pudo guardar');
          window.location.href='registro_usu.html';</script>";

}

  ?>
