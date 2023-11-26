<?php



//include('../MODELE/commandePlat.php');

//if (isset($_POST['commande'])) {
  

 // $commande = new  commandePlat($id, $etat, $login, $code);
 //$nb=commandePlat::ajoutercommande($commande);
//if( $nb>0)
//{
//   echo"plat commandé";
   
 // }
  
  //else{
  //  $etat="commandé";

 //echo"$etat";
//}

 // }
 include("../MODELE/commandePlat.php");
 include("../MODELE/plat.php");
 include("../MODELE/utilisateur.php");
 $listPlats = plat::AfficherPlats();



 if (isset($_GET['refcode'])){
  $nombreAleatoire = rand(1, 100);
 
  
   $id=$nombreAleatoire;
   $etat='0';    
 
   $code=$_GET['refcode'];
 
 
   $commande = new  commandePlat($id, $etat, $login, $code);
  $nb=commandePlat::ajoutercommande($commande);
 
 if( $nb>0)
 {
   
   header("Location:../VUES/View_Acceuil.php");
   
  
    
   }
  }   

?>