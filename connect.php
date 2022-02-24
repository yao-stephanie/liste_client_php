<?php
         $bd = "db_crud";
         $user= "root";
         $password ="";
         $dns = "mysql:host=localhost; dbname=db_crud";

     try{

         $connexion =new PDO($dns ,$user ,$password);

     }catch(Exception $e){
         die('Erreur:'.$e->getMessage());
     }

    // $con=new PDO ('localhost', 'root', '');
    // if($con){
    //     die("database connection failed");
    // }
    // $res= mysqli_query($con , 'db_crud');
    ?>