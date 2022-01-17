<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aggiuntastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>



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
                <label class="lf--label" for="inioprestito">
                </label>
                <input id="iniprestito" class='lf--input' name="iniprestito" placeholder='Data di inizio prestito' type='date'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="finprestito">
                </label>
                <input id="finprestito" class='lf--input' name="finprestito" placeholder='Data di fine prestito' type='date'>
            </div>



            <input class='lf--submit' type='submit' name="submit" value='INSERISCI'>
        </form>





    </div>








</body>

</html>