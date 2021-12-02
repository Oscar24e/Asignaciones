<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="testbd";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {

  die("No hay conexion: ".mysqli_connect_error());

}

$ASG=$_POST["txteliminar"];

mysqli_query($conn,"DELETE FROM tareas1 WHERE ID ='$ASG'")
or die("No se elimino");

mysqli_close($conn);
header("Location: index.php");

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$insert=$_POST["txteliminar"];

$sql="INSERT INTO tareas (ID,ASIGNACION) VALUES ('','$insert')";

if (mysqli_query($conn, $sql)) {

  header("Location: index.php");

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}


