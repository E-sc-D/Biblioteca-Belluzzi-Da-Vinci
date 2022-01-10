<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pagina di amministrazione</title>
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
                        <button class="button-28" id="bottone-a" role="button" onclick="location.href='aggiuntalibri.php'">Inserisci un libro</button>
                    </div>
                    <div class="bottone-modifica">
                            <input id="modifica" class='lf--input' placeholder='Inserisci ISBN del libro da modificare' type='text'>
                            <button class="button-28" id="bottone-a" role="button" onclick="location.href='modificalibri.php'">Modifica</button>
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
                    <button class="button-28" role="button">A</button>
                    <button class="button-28" role="button">B</button>
                    <button class="button-28" role="button">C</button>
                    <button class="button-28" role="button">D</button>
                    <button class="button-28" role="button">E</button>
                    <button class="button-28" role="button">F</button>
                    <button class="button-28" role="button">G</button>
                    <button class="button-28" role="button">H</button>
                    <button class="button-28" role="button">I</button>
                    <button class="button-28" role="button">J</button>
                    <button class="button-28" role="button">K</button>
                    <button class="button-28" role="button">L</button>
                    <button class="button-28" role="button">M</button>
                    <button class="button-28" role="button">N</button>
                    <button class="button-28" role="button">O</button>
                    <button class="button-28" role="button">P</button>
                    <button class="button-28" role="button">Q</button>
                    <button class="button-28" role="button">R</button>
                    <button class="button-28" role="button">S</button>
                    <button class="button-28" role="button">T</button>
                    <button class="button-28" role="button">U</button>
                    <button class="button-28" role="button">V</button>
                    <button class="button-28" role="button">W</button>
                    <button class="button-28" role="button">X</button>
                    <button class="button-28" role="button">Y</button>
                    <button class="button-28" role="button">Z</button>

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
                        <p>hello</p>

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