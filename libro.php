<?php session_start();
if(!isset($_SESSION["user"])&&!isset($_GET["ISBN"]))
{
    header("Location: login.php");
    die(); 
}
//inizialization of database info and data from session
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "biblioteca";
$user = $_SESSION["user"];
$pass = $_SESSION["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
   die("Connection failed: " . $conn->connect_error);
}

//selecting the database from where pick up the data
$retval = mysqli_select_db( $conn, 'biblioteca' );
if(! $retval ) 
{
    die('Could not select database: ' . mysqli_error($conn));
}

//ask the database if the email received exists
$userRequest= "SELECT Indirizzo,Password,Admin FROM `utente` WHERE Indirizzo like '".$user."';";
$result = mysqli_query($conn,$userRequest); 

if(!$result)
{
    print_r(mysqli_error($conn));
    
}

$result  = mysqli_fetch_array($result,MYSQLI_ASSOC);
//check if the database returned something
if(gettype($result)==="NULL")
{
    header("Location: login.php?errore=email inesistente");
    die(); 
}
//check if the password is right
if($result["Password"]!=$pass)
{
   header("Location: login.php");
   die();
}

$query = "SELECT Titolo,Immagine,descrizione FROM `libro` WHERE ISBN like '".$_GET["ISBN"]."';";
$result = mysqli_query($conn,$query);  
if(gettype($result)==="NULL")
{
    header("Location: login.php?errore=email inesistente");
    die(); 
}
$libro = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/libro.css">
    <title><?php echo $libro["Titolo"];?></title>
</head>
<body>
    <div class="page">
        <div class="left">
            <div class="immagine" style="background-image: url('<?php echo $libro["Immagine"]?>');"></div>
        </div>
        <div class="right">
            <p class="Titolo" style="font-size:35px"><?php echo $libro["Titolo"]?></p>
            <p class = "descrizione" ><?php echo $libro["descrizione"]?></p> 
            <div class="interactions">
                <button class="button-28" placeholder=""></button>
                <button class="button-28" ></button>
            </div>
        </div>
    </div>
</body>
</html>