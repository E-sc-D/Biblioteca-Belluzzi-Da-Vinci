<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aggiuntastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <?php


    if (isset($_POST['submitPre'])) {
        // servername => localhost
        // username => admin
        // password => admin
        // database name => admin
        $conn = mysqli_connect("localhost", "admin", "admin", "biblioteca");

        if ($conn === false) {
            die("ERRORE: connessione fallita"
                . mysqli_connect_error());
        }

        $codlibro = array_key_exists('codlibro', $_POST) ? $_POST['codlibro'] : '';
<<<<<<< HEAD
        $codlibro =  $_POST['codlibro'];
         $codf = $_POST['codfiscale'];
=======
        // //$codlibro =  $_POST['codlibro'];
        $codf = $_POST['codfiscale'];
>>>>>>> fc3ea29c0ad275c8b3ba3e43595f2c5339700648
        $iniprestito = $_POST['iniprestito'];
        $finprestito = $_POST['finprestito'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO prestito (CodiceFiscale, DataFinePrestito, DataInizioPrestito, CodiceLibro)
        VALUES ('$codf','$finprestito','$iniprestito','$codlibro')";

       $result = mysqli_query($conn, $sql);
         

        // Close connection
        
        //('CodiceLibro', 'Titolo', 'Lingua', 'Editore', 'AnnoPubblicazione', 'Sezione', 'NumScaffale', 'NumPosto', 'ISBN', 'immagine')
    }
    ?>



</head>

<body>
    <div class="main">
        <div class="titolo">
            <h1>Inserimento del prestito</h1>
        </div>



        <!-- FORM PER AGGIUNTA LIBRI -->
        <form class='add-form' action="" method="POST">
            <!-- PER IL METODO PHP DI AGGIUNTA DEL LIBRO SU DB -->

            <div class="flex-row">
                <label class="lf--label" for="codlibro">
                </label>
                <input id="codlibro" class='lf--input' name="codlibro" placeholder='Codice libro' type='text'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="codfiscale">
                </label>
                <input id="codfiscale" class='lf--input' name="codfiscale" placeholder='Codice fiscale' type='text'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="iniprestito">
                </label>
                <input id="iniprestito" class='lf--input' name="iniprestito" placeholder='Data di inizio prestito' type='date'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="finprestito">
                </label>
                <input id="finprestito" class='lf--input' name="finprestito" placeholder='Data di fine prestito' type='date'>
            </div>



            <input class='lf--submit' type='submit' name="submitPre" value='INSERISCI'>
        </form>





    </div>








</body>

</html>