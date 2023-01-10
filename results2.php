<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["username"];
    $password = $_POST["password"];
    if ($email != "martin@martin.com"){
        include './includes/navbar.php';
        die("wrong email");
    }else{

        include './includes/navbar.php';

    }
}

if(!isset($_SESSION))
{
    session_start();
}
// wenn keine session gibt --> eine neue machen
if (!isset($_SESSION["username"])){
    $_SESSION["username"] = "Martin";
}





?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_SESSION["username"] )) {
    echo "Hallo " .  $_SESSION["username"]  . "!";
}
else{
    echo "";
}
?>


<br>
<form action="index.php">
    <br>
<button class="btn btn-warning">Zurück zur Hauptseite</button>
</form>
</body>
</html>
