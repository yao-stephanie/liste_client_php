<?php
include('connect_user.php');
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@700&family=Montserrat:wght@300;400;600;700;900&family=Open+Sans+Condensed:wght@300;700&family=Roboto+Condensed:wght@300;400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.js">
</head>

<body>
    <header>
        <div class="bloc-connect">
            <div class="salut">
                <h2 class="title-connect">welcome</h2>
                <p>login in !</p>
            </div>

            <form id="form">
                <div class="register">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="enter Username">
                </div>
                <div class="register">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="enter Password">
                </div>
                <div class="bloc-btn">
                    <input type="submit" value="Envoyer" class="btn btn-primary m-3">
                </div>
            </form>
        </div>
    </header>
</body>

</html>