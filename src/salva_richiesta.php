<?php

if (isset($_POST['dati'])){
      $catasto = $_POST['catasto'];
      $dati = $_POST['dati'];
      $messaggio = $_POST['messaggio'];
      echo "Sezione Catastale: ". $catasto."<br>";
      echo "Dati disponibili: ". $dati."<br>";
      echo "Messaggio: ". $messaggio;
  }
  $host = 'localhost';
	$user = 'root';
	$password = 'audia3';
	$database = 'certonline';
 //Aggiunto commento per prova
$con = mysqli_connect($host, $user, $password, $database);

mysqli_query($con, "INSERT INTO visure (catasto, dati, messaggio, id_cliente) VALUES ('$catasto', '$dati', '$messaggio', 0)");
mysqli_close($con);
 ?>
