<?php

if (isset($_POST['dati'])) {
    $catasto = $_POST['catasto'];
    $dati = $_POST['dati'];
    $messaggio = $_POST['messaggio'];
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
<html>
    <head>
        <title>Certonline.it</title>
        <meta charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1><a href="index.php">Visura catastale</a></h1>

                    <p class="lead">La visura catastale consente di visionare per un singolo immobile (sia esso terreno o fabbricato) i dati catastali (foglio, particella, e se ad esso assegnato subalterno, quet'ultimo detto anche sub) e anche altri dati di natura tecnica e amministrativa.</p>
                    <h3>Costo: 12,00 &euro;</h3>
                    <hr>
                    <h4>Intestazione fattura</h4>

                    <form id="contact-form" method="post" action="salva_dati_fattura.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <!--<label for="form_name">Nome e cognome *</label>-->
                                      <input id="form_name" type="text" name="intestazione" class="form-control" placeholder="Intestazione fattura *" required="required" data-error="Prego inserire un Nome e Cognome del richiedente">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input id="form_lastname" type="text" name="piva_cf" class="form-control" placeholder="Partita IVA/Codice Fiscale*" required="required" data-error="Prego fornire un indirizzo email valido">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                          </div>
                          <hr>
                            <h4>Indirizzo</h4>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input id="form_email" type="text" name="via" class="form-control" placeholder="Indirizzo *" required="required" data-error="Prego fornire un recapito telefonico">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input id="form_email" type="text" name="loc" class="form-control" placeholder="Citt&agrave; *" required="required" data-error="Prego fornire un recapito telefonico">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <input id="form_email" type="text" name="prov" class="form-control" placeholder="Provinvcia *" required="required" data-error="Prego fornire un recapito telefonico">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <input id="form_email" type="text" name="cap" class="form-control" placeholder="CAP *" required="required" data-error="Prego fornire un recapito telefonico">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                            </div>
                            <hr>
                              <h4>Recapiti</h4>
                            <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <!--<label for="form_name">Nome e cognome *</label>-->
                                      <input id="form_name" type="text" name="tel" class="form-control" placeholder="Numero di telefono" required="required" data-error="Prego inserire un Nome e Cognome del richiedente">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input id="form_lastname" type="text" name="email" class="form-control" placeholder="Email" required="required" data-error="Prego fornire un indirizzo email valido">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <input type="submit" class="btn btn-success btn-send" value="Conferma e paga">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> I campi contrassegnati sono obbligatori</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
