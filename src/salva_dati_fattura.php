<?php

$intestazione = $_POST['intestazione'];
$piva_cf      = $_POST['piva_cf'];
$via          = $_POST['via'];
$loc          = $_POST['loc'];
$prov         = $_POST['prov'];
$cap          = $_POST['cap'];
$tel          = $_POST['tel'];
$email        = $_POST['email'];

$host = 'localhost';
$user = 'root';
$password = 'audia3';
$database = 'certonline';
 //Aggiunto commento per prova
$con = mysqli_connect($host, $user, $password, $database);
mysqli_query($con, "INSERT INTO dati_fatture (intestazione, piva_cf, via, loc, prov, cap, tel, email) VALUES ('$intestazione', '$piva_cf', '$via', '$loc', '$prov', '$cap', '$tel', '$email')");
mysqli_close($con);
