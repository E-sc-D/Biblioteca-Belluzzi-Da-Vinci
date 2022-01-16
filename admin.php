<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <script type="text/javascript" src="javascript/indexjs.js"></script> -->
    <title>Pagina di amministrazione</title>

    <?php


    if (isset($_POST['submit'])) {
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
        //$codlibro =  $_POST['codlibro'];
        $titolo =  $_POST['titolo'];
        $editore = $_POST['editore'];
        $lingua =  $_POST['lingua'];
        $anno = $_POST['anno'];
        $sezione =  $_POST['sez'];
        $scaffale =  $_POST['scaffale'];
        $posto =  $_POST['posto'];
        $codice = $_POST['codice'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO libro (CodiceLibro, Titolo, Lingua, Editore, AnnoPubblicazione,Sezione,NumScaffale,NumPosto, ISBN)
        VALUES ('$codlibro','$titolo','$lingua',' $editore','$anno','$sezione',' $scaffale','$posto','$codice')";

        if (mysqli_query($conn, $sql)) {
            /*echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; */

            //echo nl2br("\n$first_name\n $last_name\n "
            // . "$gender\n $address\n $email");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);

        //('CodiceLibro', 'Titolo', 'Lingua', 'Editore', 'AnnoPubblicazione', 'Sezione', 'NumScaffale', 'NumPosto', 'ISBN', 'immagine')
    }
    ?>

</head>

<body>
    <div class="main">

        <div class="layout">

            <!-- TAB HOME -->
            <input name="nav" type="radio" class="nav home-radio" id="home" checked="checked" />
            <div class="page home-page">
                <div class="contenuto-pagina">
                    <br></br>
                    <h2>Benvenuti nella pagina di amministrazione</h2>
                    <h2>scegliere l'operazione</h2>
                    <div class="contenuto-admin">
                        <?php
                        $mysqli = new mysqli("localhost", "admin", "admin", "biblioteca");
                        $query = "SELECT * FROM libro";

                        echo '<div class="scroll-table">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Codice Libro</th>
                                                            <th>Titolo</th>
                                                            <th>Lingua</th>
                                                            <th>Editore</th>
                                                            <th>Anno di pubblicazione</th>
                                                            <th>Sezione</th>
                                                            <th>Numero scaffale</th>
                                                            <th>Numero posto</th>
                                                            <th>ISBN</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <div class="scroll-table-body">';

                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $fieldCodLibro = $row["CodiceLibro"];
                                $fieldTitolo = $row["Titolo"];
                                $fieldLingua = $row["Lingua"];
                                $fieldEditore = $row["Editore"];
                                $fieldAnnoPubblicazione = $row["AnnoPubblicazione"];
                                $fieldSezione = $row["Sezione"];
                                $fieldNumScaffale = $row["NumScaffale"];
                                $fieldNumPosto = $row["NumPosto"];
                                $fieldISBN = $row["ISBN"];



                                echo '
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>' .  $fieldCodLibro . '</td>
                                                                <td>' . $fieldTitolo . '</td>
                                                                <td>' . $fieldLingua . '</td>
                                                                <td>' . $fieldEditore . '</td>
                                                                <td>' . $fieldAnnoPubblicazione . '</td>
                                                                <td>' . $fieldSezione . '</td>
                                                                <td>' . $fieldNumScaffale . '</td>
                                                                <td>' . $fieldNumPosto . '</td>
                                                                <td>' . $fieldISBN . '</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>';
                            }

                            echo
                            '  </div>
                                            </div>';

                            $result->free();
                        }
                        


                        ?>
                        <?php

                        if (isset($_POST['elimina'])) {

                            $mysqli2 = new mysqli("localhost", "admin", "admin", "biblioteca");


                            $query2 = "SELECT * FROM libro ";
                            $result2 = mysqli_query($mysqli, $query);
                            while ($row2 = $result2->fetch_assoc()) {
                                if ($row2['CodiceLibro'] == $_POST['elimina']) {
                                    // $titolo =  $_POST['titolo'];
                                    // $editore = $_REQUEST['editore'];
                                    // $lingua =  $_REQUEST['lingua'];
                                    // $anno = $_REQUEST['anno'];
                                    // $sezione =  $_REQUEST['sez'];
                                    // $scaffale =  $_REQUEST['scaffale'];
                                    // $posto =  $_REQUEST['posto'];
                                    // $codice = $_REQUEST['codice'];


                                    $query_up = "DELETE FROM libro WHERE CodiceLibro = $_POST[elimina]";
                                    $result_up = mysqli_query($mysqli, $query_up);
                                   
                                }
                            }
                        }
                        
                        
                        
                        
                        
                        ?>

                        <div class="contenuto-bottoni">
                            <div class="bottone-modifica">
                                <form action="modificalibri.php" method="post">
                                    <input id="modifica" class='lf--input' placeholder='Inserisci il codice del libro' type='text' name="submit">
                                    <button class="button-27" id="bottone-a" role="button">Modifica</button>
                                </form>

                            </div>
                            <div class="bottone-elimina">
                                <form action="" method="post">
                                    <input type="text" name="elimina" class="lf--input" id="elimina" placeholder="Inserisci il codice del libro">
                                    <button class="button-27" id="bottone-a" role="button">Elimina</button>
                                </form>
                            </div>
                            <div class="bottone-aggiunta">
                                <button class="button-28" id="bottone-a" role="button" onclick="location.href='aggiuntalibri.php'">Inserisci un libro</button>
                            </div>
                            <div class="bottone-esci">
                                <button class="button-28" id="bottone-a" role="button" onclick="location.href='login.php?logout=true'">Esci dalla pagina</button>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <label class=" nav" for="home">
                <span>
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Home
                </span>
            </label>




            <!-- TAB PRESTITO -->
            <input name="nav" type="radio" class="contact-radio" id="contact" />
            <div class="page prestito-page">
                <div class="contenuto-pagina">

                </div>
            </div>
            <label class="nav" for="contact">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 15 15"></polyline>
                    </svg>
                    Prestito
                </span>

            </label>
        </div>




    </div>

</body>

</html>