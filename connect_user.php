<?php
include('connect.php');
if(isset($_POST) & !empty($_POST)){
    $login=($_POST['login']);
    $password=($_POST['password']);

    $createSql = "INSERT INTO `utilisatur` (login, password) VALUES('$login','$password')";

         $donnes=$connexion->query($createSql);
    
        //  while($don=$control->fetch()){
        //      echo $don[$username];
        //  };
        //  $control->closeCursor();
        //  echo "sa marche";
    }
?>