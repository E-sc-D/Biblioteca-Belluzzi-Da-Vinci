<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aggiuntastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>

    

</head>

<body>
    <div class="main">
        <div class="titolo">
            <h1>Inserisci un nuovo libro</h1>
        </div>



        <!-- FORM PER AGGIUNTA LIBRI -->
        <form class='add-form' action="admin.php" method="POST"> <!-- PER IL METODO PHP DI AGGIUNTA DEL LIBRO SU DB --> 
            
            <div class="flex-row">
                <label class="lf--label" for="codlibro">   
                </label>
                <input id="codlibro" class='lf--input' name="codlibro" placeholder='Codice libro' type='text'>
            </div>

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

            <input class='lf--submit' type='submit' name="submit" value='INSERISCI' >
        </form>





    </div>








</body>

</html>
