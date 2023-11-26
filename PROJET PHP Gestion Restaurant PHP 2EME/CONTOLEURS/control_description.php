<?php 
include("../MODELE/plat.php");




if (isset($_POST["submit"])){
 if( isset($_POST["newscore"])) {

    $newscore = $_POST["newscore"];
  




  $res=plat::updateScore($newscore);
 
    if ($res > 0) {
        echo "Le score a été mis à jour.";
    } else {
        echo "Aucune modification n'a été effectuée.";
    }
 
}

 else {
     echo "Veuillez sélectionner un score.";
 } 
}
?>