

<?php
include("../MODELE/utilisateur.php");



   
session_start();
$login = $_POST["login"];
$password = $_POST["password"];
// $nom = $_POST["nom"];
// $cin = $_POST["cin"];
// $email = $_POST["email"];
//  $role = $_POST["role"];
$u = new utilisateur($login ,$password ,"","","","");
$_SESSION["utilisateur"]=$u;


header("Location:../VUES/View_Acceuil.php");


 


   
   utilisateur::authentification();

  
 

?>