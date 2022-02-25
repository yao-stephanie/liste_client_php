<?php
 include('navbar.php');

include('connect.php');
 include('reperation_data.php')
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.js">
</head>

<body>
    <div class="container">
        <h1>Formulaire nouveau client</h1>
        <form action="" method="POST">
            <label for="fname">nom</label>
            <input type="text" id="fname" name="nom" placeholder="Votre nom ">
            <label for="fname"> prenom</label>
            <input type="text" id="fname" name="prenom" placeholder="Votre  prénom">

            <label for="sujet">ville</label>
            <input type="text" id="ville" name="ville" placeholder="ville">

            <label for="emailAddress">age</label>
            <input id="age" type="text" name="age" placeholder="Votre age">


            <label for="subject">email</label>
            <input id="email" type="email" name="email" placeholder="Votre email">

            <label for="subject">password</label>
            <input id="password" type="text" name="password" placeholder="Votre password">

            <div class="bloc-btn">
                <input type="submit" value="Envoyer" class="btn btn-primary m-3">
                <a class="liens" href="view.php">
                    <button class="btn btn-success m-3" type="button">
                        voir la listes
                    </button>
                </a>
            </div>
        </form>
    </div>


</body>

</html>