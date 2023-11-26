<?php

class plat
{ 
    private $nom;
    private $code;
    private $description;
    private $prix;
    private $score;
    private $nbscore;

    function __construct($nom, $code, $description, $prix, $score, $nbscore)
    {
        $this->nom = $nom;
        $this->code = $code;
        $this->description = $description;
        $this->prix = $prix;
        $this->score = $score;
        $this->nbscore = $nbscore;
    }

    public function __get($attr)
    {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function __toString()
    {
        $s = "le plat est : " . $this->nom . " " . $this->code . " " . $this->description . " " . $this->prix . " " . $this->score . " " . $this->nbscore;
        return $s;
    }
    //affichage
    public static function AfficherPlats()
    {

        include("../connexion.php");
        $listPlats = [];
        $reqprep1 = $conn->prepare("select * from plat");
        $reqprep1->execute();


        $resultat = $reqprep1->fetchAll();

    


          foreach ($resultat as $pl) {
            $listPlats[] = new plat(
                $pl['nom'], 
                $pl['code'],
                $pl['description'],
                $pl['prix'],
                $pl['score'],
               $pl['nbscore']
           
                
            );
        }
        return $listPlats;
    }

//update score
     public static function updateScore($newscore){
 
    
        include('../connexion.php');
       
        $reqprep0 = "select  nbscore, score FROM plat ";
        $res = $conn->query($reqprep0)->fetch(PDO::FETCH_ASSOC);
    //$newscore
    

      
    //   foreach ($res as $p) {
     
 $nbscore = $res['nbscore'] + 1;
 $score = ($res['nbscore'] * $res['score'] + $newscore) / $nbscore; 
   
        $reqprep1 = "update plat SET score = ".$score.", nbscore = ".$nbscore;
        $nb=$conn->exec($reqprep1);
        return $nb;
 
    }

    //ajout
    public static function ajouterPlat($plat) {
        include("../connexion.php");
    
        $reqprep = "INSERT INTO plat (code, nom, description, prix, score, nbscore) 
                    VALUES (:code, :nom, :description, :prix, :score, :nbscore)";
        $stmt = $conn->prepare($reqprep);
        $stmt->bindParam(':code', $plat->code);
        $stmt->bindParam(':nom', $plat->nom);
        $stmt->bindParam(':description', $plat->description);
        $stmt->bindParam(':prix', $plat->prix);
        $stmt->bindParam(':score', $plat->score);
        $stmt->bindParam(':nbscore', $plat->nbscore);
        $stmt->execute();
        $n= $stmt->rowCount();
        return $n;
    }
    
   //supression
  
    public static function supprimerPlat($code)
    {
     
        include("../connexion.php");
        $code=$_GET['refSupp'];
      
     
        $nb = $conn->exec("delete from plat where code='$code'");
        return $nb;
    }


    
}




    

?>

