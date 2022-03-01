<?php
include('connect.php');
if(isset($_POST) & !empty($_POST)){
    $login=($_POST['login']);
    $password=($_POST['password']);

    $logqls = "INSERT INTO `user` (login, password) VALUES('$login','$password')";

         $donnes=$connexion->query($logqls);
    
        //  while($don=$control->fetch()){
        //      echo $don[$username];
        //  };
        //  $control->closeCursor();
        //  echo "sa marche";
    }
?>