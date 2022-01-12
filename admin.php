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
    
        
    if(isset($_POST['submit']))
    {
        // servername => localhost
        // username => admin
        // password => admin
        // database name => admin
        $conn = mysqli_connect("localhost", "admin", "admin", "biblioteca");
          
        if($conn === false){
            die("ERRORE: connessione fallita" 
                . mysqli_connect_error());
        }
          
        $codlibro = array_key_exists( 'codlibro' , $_POST ) ? $_POST['codlibro'] : '' ;
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
          
        if(mysqli_query($conn, $sql)){
            /*echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; */
  
            //echo nl2br("\n$first_name\n $last_name\n "
               // . "$gender\n $address\n $email");
        } else{
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
                <div class="page-contents">
                    <h2>Benvenuti nella pagina di amministrazione</h2>
                    <h2>scegliere l'operazione</h2>
                    <div class="bottone-aggiunta">
                        <button class="button-27" id="bottone-a" role="button" onclick="location.href='aggiuntalibri.php'">Inserisci un libro</button>
                    </div>
                    <div class="bottone-modifica">
                        <input id="modifica" class='lf--input' placeholder='Inserisci ISBN del libro da modificare' type='text'>
                        <button class="button-27" id="bottone-a" role="button" onclick="location.href='modificalibri.php'">Modifica</button>
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




            <!-- TAB LIBRI -->
            <input name="nav" type="radio" class="about-radio" id="about" />
            <div class="page books-page">
                <div class="index">
                    <button class="button-28" onclick="scrollintoid('A')" role="button">A</button>
                    <button class="button-28" onclick="scrollintoid('B')" role="button">B</button>
                    <button class="button-28" onclick="scrollintoid('C')" role="button">C</button>
                    <button class="button-28" onclick="scrollintoid('D')" role="button">D</button>
                    <button class="button-28" onclick="scrollintoid('E')" role="button">E</button>
                    <button class="button-28" onclick="scrollintoid('F')" role="button">F</button>
                    <button class="button-28" onclick="scrollintoid('G')" role="button">G</button>
                    <button class="button-28" onclick="scrollintoid('H')" role="button">H</button>
                    <button class="button-28" onclick="scrollintoid('I')" role="button">I</button>
                    <button class="button-28" onclick="scrollintoid('J')" role="button">J</button>
                    <button class="button-28" onclick="scrollintoid('K')" role="button">K</button>
                    <button class="button-28" onclick="scrollintoid('L')" role="button">L</button>
                    <button class="button-28" onclick="scrollintoid('M')" role="button">M</button>
                    <button class="button-28" onclick="scrollintoid('N')" role="button">N</button>
                    <button class="button-28" onclick="scrollintoid('O')" role="button">O</button>
                    <button class="button-28" onclick="scrollintoid('P')" role="button">P</button>
                    <button class="button-28" onclick="scrollintoid('Q')" role="button">Q</button>
                    <button class="button-28" onclick="scrollintoid('R')" role="button">R</button>
                    <button class="button-28" onclick="scrollintoid('D')" role="button">S</button>
                    <button class="button-28" onclick="scrollintoid('T')" role="button">T</button>
                    <button class="button-28" onclick="scrollintoid('U')" role="button">U</button>
                    <button class="button-28" onclick="scrollintoid('V')" role="button">V</button>
                    <button class="button-28" onclick="scrollintoid('W')" role="button">W</button>
                    <button class="button-28" onclick="scrollintoid('X')" role="button">X</button>
                    <button class="button-28" onclick="scrollintoid('Y')" role="button">Y</button>
                    <button class="button-28" onclick="scrollintoid('Z')" role="button">Z</button>

                    <p>hello</p>
                </div>



                <div class="contenuto-pagina">
                    <div class="pos-search">
                        <div class="search">

                            <input id="search" class='lf--input' placeholder='Cerca il libro' type='text' />
                            <input class='lf--submit' type='submit' value='Cerca' />



                        </div>
                    </div>
                    <div class="listofbooks">

                        <?php

                        function console_log($msg)
                        {
                            echo '<script>' .
                                'console.log("' . $msg . ' ")</script>';
                        }
                        $servername = "localhost";
                        $username = "admin";
                        $password = "admin";
                        $dbname = "biblioteca";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        //display message in console



                        console_log("Hi there!");



                        $sql = "SELECT `Titolo` FROM `libro` ORDER BY `Titolo`";
                        $result = mysqli_query($conn, $sql);
                        $psi = mysqli_fetch_all($result, MYSQLI_ASSOC);



                        $i = 0;
                        $letter = 97;
                        $flag = false;
                        while ($i < count($psi)) {
                            if ($flag == false) {
                                echo "<p class ='indexchar'id = " . chr($letter - 32) . ">" . "." . chr($letter - 32) . "</p>";

                                $flag = true;
                            }

                            if (strtolower($psi[$i]["Titolo"][0]) == chr($letter)) {
                                echo "<button class='book'>" . $psi[$i]["Titolo"] . "</button>";
                                $i += 1;
                            } else {
                                $flag = false;
                                $letter += 1;
                            }
                        }


                        ?>

                    </div>

                </div>
            </div>
            <label class="nav" for="about">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    Libri
                </span>
            </label>


            <!-- TAB PRESTITO -->
            <input name="nav" type="radio" class="contact-radio" id="contact" />
            <div class="page prestito-page">
                <div class="page-contents">
                    <h2>Prestito</h2>
                    <p></p>
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