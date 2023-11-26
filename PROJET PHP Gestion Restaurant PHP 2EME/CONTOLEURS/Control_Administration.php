<?php
include("../MODELE/plat.php");

// Ajout
if (isset($_POST['submit'])) {
    if (!empty($_POST['code']) && !empty($_POST['nom'])&& !empty($_POST['description']) && !empty($_POST['prix']) && !empty($_POST['score'])&& !empty($_POST['nbscore'])) {
    //&&!empty($_POST['score'])&&!empty($_POST['nbscore'])) {
        $code= $_POST['code'];
    
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
       $score = $_POST['score'];
        $nbscore = $_POST['nbscore'];
       /// $nbscore = $_POST['nbscore'];
       $nbp= $_POST['nbp'];
       $nbc= $_POST['nbc'];

        $plat = new plat($nom,$code,$description,$prix, $score, $nbscore);

        $n = plat::ajouterPlat($plat);

        
        if ($n> 0) {

            header('Location:../VUES/Administration.php');
            exit(); 
        } else {
            echo "Échec de l'insertion de plat";
        }
    }

}
      
//session_start();


    if (isset($_GET['refSupp']) ) {
     // if  (isset($_POST['Supprimer'])){
    $code=$_GET['refSupp'];
       // if ($ref != null) {
            $nb = plat::supprimerPlat($code);
            if ($nb > 0) {
                echo '<script>alert("plat supprimé")</script>';
                echo '<script> document.location.href="../VUES/Administration.php"</script>';
            }
      //  }
//   }
 
    }


?>
