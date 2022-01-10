<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modificastyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="titolo">
            <h1>Modifica il libro</h1>
        </div>



        <!-- FORM PER MODIFICA LIBRI -->
        <form class='add-form' action="" method="">
            <!-- PER IL METODO PHP DI MODIFICA DEL LIBRO SU DB -->
            <div class="flex-row">
                <label class="lf--label" for="titolo">
                </label>
                <input id="titolo" class='lf--input' placeholder='Titolo del libro' type='text'>
            </div>
            <div class="flex-row">
                <label class="lf--label" for="editore">
                </label>
                <input id="editore" class='lf--input' placeholder='Editore' type='text'>
            </div>


            <div class="flex-row">
                <label class="lf--label" for="lingua">
                </label>
                <input id="lingua" class='lf--input' placeholder='Lingua' type='text'>
            </div>
            <div class="flex-row">
                <label class="lf--label" for="anno">
                </label>
                <input id="anno" class='lf--input' placeholder='Anno di pubblicazione' type=''>
            </div>


            <div class="flex-row">
                <label class="lf--label" for="codice">
                </label>
                <input id="codice" class='lf--input' placeholder='Codice ISBN' type='text'>
            </div>

            <div class="bottoni">
                <input class='lf--submit' type='submit' value='MODIFICA'>
                <input class='lf--submit' type='submit' value='ELIMINA'>

            </div>

        </form>





    </div>








</body>

</html>