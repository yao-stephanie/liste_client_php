<?php
include('connect.php');
if(isset($_POST) & !empty($_POST)){

    
    $username=($_POST['username']);
    $password=($_POST['password']);

    $createSql = "INSERT INTO `user_con` (username, password) VALUES('$username','$password')";

         $control =$connexion->query($createSql);
    
         while($don=$control->fetch()){
             echo $don[$username];
         };
         $reponse->closeCursor();
         echo "sa marche";
    }
?>