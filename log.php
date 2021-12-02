<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="testbd";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
  die("No hay conexion: ".mysqli_connect_error());
}

$nombre=$_POST["usuario"];
$pass=$_POST["contraseña"];

$query=mysqli_query($conn,"SELECT * FROM login WHERE Usuario ='".$nombre."' and Password ='".$pass."'");
$nr=mysqli_num_rows($query);

if ($nr==1) {
  header("Location: Asignacion.php");
}elseif ($nr==0) {
  header("Location: loginvista.html");
}
?>