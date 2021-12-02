<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="testbd";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {

  die("No hay conexion: ".mysqli_connect_error());

}

$ASG=$_POST["tareaa_nom"];

$sql="INSERT INTO tareas1 (ID,ASIGNACION) VALUES ('','$ASG')";

if (mysqli_query($conn, $sql)) {

  header("Location: Asignacion.php");

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}