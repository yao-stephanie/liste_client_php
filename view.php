<?php
include('navbar.php');

include('connect.php');
$readsql = "SELECT * FROM `listeclient`";
$res = $connexion->query($readsql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.js">
    <title>view.php</title>
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <h1>Liste des clients enregistrer</h1>

            <a href="index.php">
                <button type="" class="btn btn-primary">Ajouter un Clients</button>
            </a>
        </div>

        <table class="table table-client">
            <thead>
                <tr class="entete">
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">ville</th>
                    <th scope="col">age</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col" class="action">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($repon=$res->fetch()){
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $repon['id']; ?></th>
                    <td><?php echo $repon['nom']; ?></td>
                    <td><?php echo $repon['prenom']; ?></td>
                    <td><?php echo $repon['ville']; ?></td>
                    <td><?php echo $repon['age']; ?></td>
                    <td><?php echo $repon['email']; ?></td>
                    <td><?php echo $repon['password']; ?></td>

                    <td class="updel">
                        <a href="update.php?id=<?php echo $repon['id']; ?>" class="m-2">
                            <button class="btn btn-primary m-2">Modifier</button>
                        </a>
                        <a href="delete.php?id=<?php echo $repon['id']; ?>">
                            <button class="btn btn-success m-2">Supprimer</button>
                        </a>
                    </td>
                </tr>

                <?php }?>

            </tbody>
        </table>
    </div>
</body>

</html>