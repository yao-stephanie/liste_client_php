<?php
include_once 'navbar.php';
include('connect.php');
 
 $id=$_GET['id'];
  $selsql= "SELECT * FROM `user_client` WHERE id=$id";
  $res = $connexion->query($selsql);
  $repon = $res->fetch();



 if(isset($_POST) & !empty($_POST)){
    $nom=($_POST['nom']);
    $prenom=($_POST['prenom']);
    $ville=($_POST['ville']);
    $age=($_POST['age']);
    $email=($_POST['email']); 
    $password=($_POST['password']);

    $updateSql = "UPDATE `user_client` SET nom='$nom' ,prenom='$prenom' ,ville='$ville' ,age='$age' ,email='$email, password='$password') WHERE id=$id ";

    $res=$connexion->query($updateSql);
    // $repon=$res->fetch();
   
    if($res){
        header("location: view.php");
    }else{
      $erreur = "la mise a jour a echouer" ;
    }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <form action="" method="POST">
            <label for="fname">nom</label>
            <input type="text" name="nom" placeholder="Votre nom " values="<?php echo $repon['nom']; ?>">
            <label for="fname"> prenom</label>
            <input type="text" name="prenom" placeholder="Votre  prénom" values="<?php echo $repon['prenom']?>">

            <label for="sujet">ville</label>
            <input type="text" id="ville" name="ville" placeholder="ville" values="<?php echo $repon['ville']?>">

            <label for="emailAddress">age</label>
            <input type="text" name="age" placeholder="Votre age" values="<?php echo $repon['age']?>">


            <label for="subject">email</label>
            <input type="email" name="email" placeholder="Votre email" values="<?php echo $repon['email']?>">

            <label for="subject">password</label>
            <input type="text" name="password" placeholder="Votre password" values="<?php echo $repon['password']?>">

            <div class="pt-4">
                <input type="submit" value="Envoyer" class="btn btn-primary m-3">
            </div>
        </form>
    </div>


</body>

</html>