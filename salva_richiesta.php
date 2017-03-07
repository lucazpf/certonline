<?php

if (isset($_POST['dati'])){
      $catasto = $_POST['catasto'];
      $dati = $_POST['dati'];
      $messaggio = $_POST['messaggio'];
      echo "Sezione Catastale: ". $catasto."<br>";
      echo "Dati disponibili: ". $dati."<br>";
      echo "Messaggio: ". $messaggio;
  }

 ?>
