<html>

<head>
    <title>Certonline.it</title>
    <meta charset="UTF-8">
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

                <p class="lead">La visura catastale consente di visionare per un singolo immobile (sia esso terreno o fabbricato) i dati catastali (foglio, particella, e se ad esso assegnato subalterno, quest'ultimo detto anche sub) e anche altri dati di natura tecnica
                    e amministrativa.</p>
                <h3>Costo: 12,00 &euro;</h3>


                <form id="contact-form" method="post" action="dati_fattura.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">


                            <div class="col-md-12">
                                <hr>
                                <h4>Sezione catastale</h4>
                                <div class="form-group">

                                    <ul class="list-inline">
                                        <li><input type="radio" name="catasto" value="terreno" required="required" data-error="Campo richiesto"> Catasto Terreni </li><br>
                                        <li> <input type="radio" name="catasto" value="fabbricato" required="true"> Catasto Fabbricati</li>
                                    </ul>
                                    <div class="help-block with-errors"></div>

                                </div>


                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4>Dati in proprio possesso</h4>

                                    <ul class="list-inline">
                                        <li><input type="radio" name="dati" value="dati_catastali" required="required" data-error="Campo richiesto"> Dati Catastali </li><br>
                                        <li><input type="radio" name="dati" value="dati_anagrafici"> Dati Anagrafici Intestatario (o almeno uno degli intestatari se cointestato)</li>
                                        <li><input type="radio" name="dati" value="civico"> Dati relativi all'indirizzo dell'immobile (sia esso <b>fabbricato</b> o <b>terreno</b>) </li>
                                    </ul>
                                    <div class="help-block with-errors"></div>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Comunicazioni aggiuntive</label>
                                    <textarea id="form_message" name="messaggio" class="form-control" rows="4" required="required" data-error="Obbligatorio inserire un messaggio."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Prosegui >">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> I campi contrassegnati sono obbligatori</p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>
</body>

</html>
