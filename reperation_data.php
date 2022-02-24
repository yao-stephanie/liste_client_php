<?php
include('connect.php');
if(isset($_POST) & !empty($_POST)){

    $nom=($_POST['nom']);
    $prenom=($_POST['prenom']);
    $ville=($_POST['ville']);
    $age=($_POST['age']);
    $email=($_POST['email']);
    $password=($_POST['password']);

    $createSql = "INSERT INTO `user_client` (nom ,prenom ,ville ,age ,email, password) VALUES('$nom' , '$prenom' , '$ville' , '$age' , '$email' , '$password')";

         $reponse =$connexion->query($createSql);
    
         while($donnees=$reponse->fetch()){
             echo $donnees[$nom];
         };
         $reponse->closeCursor();
         echo "sa marche";


    // $createSql = "INSERT INTO `ùser_client` (nom, prenom, ville, age, email, password)
    //  VALUES('$nom','$prenom', '$ville', '$age', '$email', '$password')";
     
    //  $reponse = $connexion->query($createSql);
    // //  while($donnees=$reponse->fetch()){
    //     //         echo $donnees[$nom];
    //     //     };
    //     //     $reponse->closeCursor();
    //     //     echo "sa marche";
    //  if($dons=$reponse->fetch()){
    //      $message = "insertion reussi avec succes";
    //  }else{
    //      $message = "erreur d'insertion a la base";
    //  }
     }


?>