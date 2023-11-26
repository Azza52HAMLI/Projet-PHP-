<?php

///control inscription//////

include('../MODELE/utilisateur.php');



if (isset($_POST['submit'])) {
   if (isset($_POST['login']) && isset( $_POST['password']) &&  isset( $_POST['nom']) && isset($_POST['cin']) && isset($_POST['e-mail'])&& isset($_POST['role']) )  {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $nom = $_POST['nom'];
        $cin = $_POST['cin'];
        $email = $_POST['e-mail'];
        $role = $_POST['role'];
    

    
            $utilisateur = new  utilisateur($login, $password, $nom, $cin,$email,$role);
            $ut = utilisateur::ajouterUtilisateur($utilisateur);
          
            if ($ut==0) {
                header('location:../VUES/inscription.php');
            } else {
                header('location:../VUES/authentification1.html');
            }
           
        }
    
    }


?>

