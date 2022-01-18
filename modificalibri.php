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
    
            $mysqli = new mysqli("localhost", "admin", "admin", "biblioteca");
            $retval = mysqli_select_db($mysqli, 'biblioteca');
            if (!$retval) 
            {
                die('Could not select database: ' . mysqli_error($conn));
            }
            if(isset($_POST["modifica"]))
            {
                $query = "SELECT * FROM `libro` WHERE CodiceLibro LIKE '0001' ";
                $result = mysqli_query($mysqli,$query);
                $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
                //check if the database returned something
                if (gettype($result) === "NULL") 
                {
                    header("Location: login.php?errore=email inesistente");
                    die();
                }
                //print_r($result["CodiceLibro"]);
            }
            if(isset($_POST["titolo"]))
            {
                              
                        $query_up = "UPDATE `libro` SET `Titolo`='$_POST[titolo]',`Lingua`='$_POST[lingua]',`Editore`='$_POST[editore]',`AnnoPubblicazione`='$_POST[anno]',`Sezione`='$_POST[sez]',`NumScaffale`='$_POST[scaffale]',`NumPosto`='$_POST[posto]',ISBN='$_POST[ISBN]'  WHERE `libro`.`CodiceLibro` ='$_GET[codice]' ";
                        //print_r($query_up);
                        $result_up = mysqli_query($mysqli, $query_up);                       

                         if (!$result_up)
                        {
                             die("The error is: " . mysqli_error($mysqli));
                        } 
                         else
                        {
                             echo "<script>location.href = 'admin.php';</script>";
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
        <form class='add-form' method="post" action="modificalibri.php?codice=<?php echo $result["CodiceLibro"]?>">    
            <div class="flex-row">
                <label class="lf--label" for="titolo">
                </label>
                <input id="titolo" class='lf--input' name="titolo" placeholder='Titolo del libro' type='text' value="<?php echo $result["Titolo"] ?>">
            </div>

            <div class="flex-row">
                <label class="lf--label" for="editore">
                </label>
                <input id="editore" class='lf--input' name="editore" placeholder='Editore' type='text' value="<?php echo $result["Editore"]?>">
            </div>

            <div class="flex-row">
                <label class="lf--label" for="lingua">
                </label>
                <input id="lingua" class='lf--input' name="lingua" placeholder='Lingua' type='text'value="<?php echo $result["Lingua"]?>" >
            </div>

            <div class="flex-row">
                <label class="lf--label" for="anno">
                </label>
                <input id="anno" class='lf--input' name="anno" placeholder='Anno di pubblicazione' type='' value="<?php echo $result["AnnoPubblicazione"]?>">
            </div>

            <div class="flex-row">
                <label class="lf--label" for="sez">
                </label>
                <input id="sez" class='lf--input' name="sez" placeholder='Sezione/Categoria' type='' value="<?php echo $result["Sezione"]?>">
            </div>

            <div class="flex-row">
                <label class="lf--label" for="scaffale">
                </label>
                <input id="scaffale" class='lf--input' name="scaffale" placeholder='Numero scaffale' type=''value="<?php echo $result["NumScaffale"]?>" >
            </div>

            <div class="flex-row">
                <label class="lf--label" for="posto">
                </label>
                <input id="posto" class='lf--input' name="posto" placeholder='Numero posto' type='' value="<?php echo $result["NumPosto"]?>">
            </div>

            <div class="flex-row">
                <label class="lf--label" for="codice">
                </label>
                <input id="codice" class='lf--input' name="ISBN" placeholder='Codice ISBN' type='text' value="<?php echo $result["ISBN"]?>" >
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