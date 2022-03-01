<?php

include('connect.php');
 
 $id=$_GET['id'];
 $delsql= "DELETE FROM `listeclient` WHERE id=$id";
 $res = $connexion->query($delsql);
 if($res){
    header("location: view.php");
}else{
  echo "la suppression a echouer" ;
}


?>