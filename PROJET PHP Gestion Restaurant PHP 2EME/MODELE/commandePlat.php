<?php

//include('../MODELE/utilisateur.php');
//include('../MODELE/plat.php');
class commandePlat {
    private $id;
    private  $etat;
    private $login;
    private $code;
   
    function __construct($id,$etat,$login,$code) {
        $this->id=$id;
        $this->etat=$etat;
        $this->login=$login;
       $this->code=$code;
       
        
     }
     public function __get($attr) {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);}
        public function __set($attr,$value) {
        $this->$attr = $value; }
       
      
      public function __toString() {
            $p=$this->id." ".$this->etat." ".$this->login." ".$this->code;
            return $p;
            }

   
////////// affichage commande non préparé

public static function AfficherCommande(){




    include("../connexion.php");
    $listcommandes = [];
    $reqprep1 = $conn->prepare("select * FROM commandePlat WHERE etat = 0");
    $reqprep1->execute();


    $resultat = $reqprep1->fetchAll();

    foreach ($resultat as $cP) {

    
     

        $listcommandes[] = new commandePlat(
            $cP['id'],
            $cP['etat'],
            $cP['login'],
             $cP['code']
           
   


        );
    }
    return $listcommandes;

}

public static function ajoutercommande($commande){
    include("../connexion.php");
  //  include("../utilisateur.php");
  // print("fonction ajouter");
  //$login=$_POST["login"];
//$login=$_GET['login'];
   
session_start();

$u=$_SESSION["utilisateur"];
$login=$u->login;
$code = $_GET["refcode"];
//header("Location:../VUES/View_Acceuil.php?" );
    $commande = $conn->exec("insert into commandeplat values('$commande->id',
    '$commande->etat','$login','$code')") or die(print_r($conn->errorInfo()));
    return $commande;
}

//public static function updateEtat($newEtat){
 
    
 //   include('../connexion.php');


 //   $reqprep0 = "select etat FROM commandeplat ";
//    $res = $conn->query($reqprep0)->fetch(PDO::FETCH_ASSOC);



  

 
//$newEtat==0;
 //   $etat =  $newEtat ;

 //   $reqprep1 = "update plat SET  etat = ".$etat." ";
 //   $nb=$conn->exec($reqprep1);
 //   return $nb;

//}

//public static function AfficherEtat(){




   // include("../connexion.php");

// session_start();
// $refEtat=$_GET['refEtat'];
  //  $reqprep1 = $conn->prepare("select etat FROM commandeplat WHERE code = $refEtat ");
  //  $reqprep1->execute();

    
  //  $res = $reqprep1->fetch();
  //  $etat = $res['etat'];

}
/////update etat préparé
//public static function updateEtat($id){
       
 //   include('../connexion.php');

 //  $reqprep0 = "select etat FROM commandePlat where id=$id";
 //   $reqprep1 = $conn->query($reqprep0)->fetch(PDO::FETCH_ASSOC);




//1 **etat préparé
 //   $reqprep1 = "update commandePlat SET etat = 1 ";
 //   $nb=$conn->exec($reqprep1);
 //   return $nb;

         




?>