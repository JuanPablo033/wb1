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
    .card {
        margin-top: 5vh;
        width: 25%;
        height: 60vh;
        padding: 10vh;
        background: #38598b;
        border-radius: 50px;
        display: block;
        align-items: center;
        color: #e7eaf6;
        line-height: 10vh;
        text-align: center;
    }
    h1, h2 {
        margin-bottom: 4vh;
        margin-top: 10vh;
        animation: customAni 2s ease 0s  normal none;
    }
    h1 {
        font-size: 40px
    }
    h2 {
        font-size: 20px
    }
    @keyframes customAni {
  0% {
	transform: scale(0.5);
  }

  100% {
	transform: scale(1);
  }
}

    </style>
</head>
<body>
    <div class="card">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["login"]);
            $email = htmlspecialchars($_POST["email"]);
            $pass = htmlspecialchars($_POST["haslo"]);
            $wiek = htmlspecialchars($_POST["wiek"]);

            if ($wiek < 18) {
                echo '<h1 style="color: red;">Dostęp zabroniony</h1>';
            } else  {
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
            }
                

            
        
    ?>
    </div>


</body>
</html>