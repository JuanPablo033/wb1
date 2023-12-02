<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    * {
        padding: 0;
        margin: 0 auto;
        font-family: 'Montserrat', sans-serif;
    }
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #e7eaf6;
    }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["login"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["haslo"]);

    if (empty($name) || empty($email) || empty($pass)) {
        echo "Wszystkie pola formularza muszą być wypełnione.";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Podany adres e-mail jest nieprawidłowy.";
        } else {
            echo "<h1>Witaj $name <br></h1>";
            echo "<h2>Miło znów cię widzieć <3</h2>";
        }
    }
}
?>

</body>
</html>