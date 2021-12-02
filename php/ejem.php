<?php

$servername = "localhost";
$database = "login";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


$id = "alumno";

$sql="SELECT * FROM usuarios WHERE dbuser = '$id'";  

$resultado=mysqli_query($conn,$sql) or die ('Error en el query database');

//Valida que la consulta esté bien hecha

if( $resultado ){

  //Ahora valida que la consuta haya traido registros

  if( mysqli_num_rows( $resultado ) > 0){



    //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal

    while($fila = mysqli_fetch_array( $resultado ) ){



      //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes

      //un campo en tu DB llamado NOMBRE, así accederías

      echo $fila['dbuser'];

    }

  }
}


  //Recuerda liberar la memoria del resultado,

  mysqli_free_result( $resultado );



  //Si ya no ocupas la conexión, cierrala

  mysqli_close( $conn );
  
  