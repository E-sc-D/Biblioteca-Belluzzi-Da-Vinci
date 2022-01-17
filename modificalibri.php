<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modificastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modifica</title>
    <?php
    
       

        if (isset($_POST['codice_m'])) {

            $mysqli = new mysqli("localhost", "admin", "admin", "biblioteca");

            $query = "SELECT * FROM libro ";
            $result = mysqli_query($mysqli,$query);
            while ($row = $result->fetch_assoc())
            {
                if($row['CodiceLibro'] == $_POST['codice_m'])
                {
                    // $titolo =  $_POST['titolo'];
                    // $editore = $_REQUEST['editore'];
                    // $lingua =  $_REQUEST['lingua'];
                    // $anno = $_REQUEST['anno'];
                    // $sezione =  $_REQUEST['sez'];
                    // $scaffale =  $_REQUEST['scaffale'];
                    // $posto =  $_REQUEST['posto'];
                    // $codice = $_REQUEST['codice'];
                    // if(isset($_POST['modifica']))
                    // {
                        $query_up = "UPDATE libro SET Titolo='$_POST[titolo]',Lingua='$_POST[lingua]',Editore='$_POST[editore]',AnnoPubblicazione='$_POST[anno]',Sezione='$_POST[sez]',NumScaffale='$_POST[scaffale]',NumPosto='$_POST[posto]',ISBN='$_POST[codice]'  WHERE CodiceLibro='$_POST[codice_m]' ";
                        $result_up = mysqli_query($mysqli, $query_up);
                        

                        // if (!$result_up) {
                        //     die("The error is: " . mysqli_error($mysqli));
                        // } else {
                        //     echo "<script>location.href = 'admin.php';</script>";
                        // }

                    // }
                    //
                    
                    
                   
                    
                }

            }

        }


        ?>

</head>

<body>
    <div class="main">
        <div class="titolo">
            <h1>Modifica il libro</h1>
        </div>
        <!-- FORM PER MODIFICA LIBRI -->
        <form class='add-form' method="post">
            <!-- PER IL METODO PHP DI MODIFICA DEL LIBRO SU DB -->

            <input type="hidden" name="codice_m" value="<?php  if (isset($_POST['submit'])) {
                                                            echo $_POST['submit'];
                                                        }
                                                        ?>">
           
            <div class="flex-row">
                <label class="lf--label" for="titolo">
                </label>
                <input id="titolo" class='lf--input' name="titolo" placeholder='Titolo del libro' type='text'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="editore">
                </label>
                <input id="editore" class='lf--input' name="editore" placeholder='Editore' type='text'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="lingua">
                </label>
                <input id="lingua" class='lf--input' name="lingua" placeholder='Lingua' type='text'>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="anno">
                </label>
                <input id="anno" class='lf--input' name="anno" placeholder='Anno di pubblicazione' type=''>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="sez">
                </label>
                <input id="sez" class='lf--input' name="sez" placeholder='Sezione/Categoria' type=''>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="scaffale">
                </label>
                <input id="scaffale" class='lf--input' name="scaffale" placeholder='Numero scaffale' type=''>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="posto">
                </label>
                <input id="posto" class='lf--input' name="posto" placeholder='Numero posto' type=''>
            </div>

            <div class="flex-row">
                <label class="lf--label" for="codice">
                </label>
                <input id="codice" class='lf--input' name="codice" placeholder='Codice ISBN' type='text'>
            </div>


            <div class="bottoni">
                <input class='lf--submit' type='submit' value='MODIFICA'>
                
                                                            <!-- TASK DI URSU -->
                <!-- TASK 1: FARE IN MODO CHE UNA VOLTA ESEGUITA LA MODIFICA COMMUNICARLO E IN SEGUITO CREARE UN BOTTONE PER TORNARE ALLA HOME PAGE/AGGIUSTA LA MODIFICA -->
                <!-- TASK 2: AGGIUSTA L'AGGIUNTA-->

                <!-- TASK 5: MODIFICA INSIEME A GORI LA RELAZIONE(FOTO/COMMIT/BOZZE) -->
                <!-- TASK 6(SE C'E TEMPO): CREARE TUTTA LA GESTIONE DEI PRESTITI -->
            </div>

        </form>





    </div>








</body>

</html>