<?php

if (!isset($_SESSION)){
    session_start();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];



}

if (!isset($_COOKIE["name_cookie"])){
    $_COOKIE["name_cookie"] ="$username";

}else{
    setcookie("name_cookie", $username, time() + 600);
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

if (isset($_COOKIE["name_cookie"])){
    include "includes/navbar.php";
    echo "Hallo " . $_COOKIE["name_cookie"] . ", ";

    echo "<h4>Sie haben sich erfolgreich registriert und können sich nun 
            <a href='./index.php'>anmelden</a>!</h4>";
}else{
    include "includes/navbar.php";
    echo "Leider ist etwas schiefgelaufen. <a href='./registrierung.php'>Erneut registrieren</a> ";
}


?>


</body>
</html>

