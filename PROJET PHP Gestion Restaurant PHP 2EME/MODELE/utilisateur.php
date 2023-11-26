

    <?php

    class Utilisateur
    {
        private $login;
        private $password;
      

        private $nom;
         private $cin;
        private $email;
           private $role;

        function __construct($login, $password, $nom, $cin, $email,$role )
        {
            $this->login = $login;
            $this->password = $password;
            $this->nom = $nom;
            $this->cin = $cin;
            $this->email = $email;
            $this->role=$role;
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
            $s="la personne est: ".$this->login." ".$this->password;
           
            return $s; 
        }

        //////s'authentifier//////////////
         public static function authentification()
        {
            include('../connexion.php');
        
            if (isset($_POST['login'])) {
               
                $login = $_POST['login'];
           
        
               if ($conn)
                {
               
                $req = "select role from utilisateur where login = '$login'";
                $utilisateur = $conn->query($req)->fetch(PDO::FETCH_ASSOC);
        
                if ($utilisateur) {
                  
                        if ($utilisateur['role'] == '1') {
                         header('Location:../VUES/Administration.php');
                            exit();
                        } else {
                            header('Location: ../VUES/View_Acceuil.php');
                            exit();
                        }
                    }
                    else{
                        header('Location:../VUES/authentification1.html');
                    }

                }
        
      
                echo "Identifiant ou mot de passe incorrect.";
            }
        }
//ajouter utilisateur
            public static function ajouterUtilisateur($utilisateur){
                include("../connexion.php");
              // print("fonction ajouter");
                $ut = $conn->exec("insert into utilisateur values('$utilisateur->login',
                '$utilisateur->password','$utilisateur->nom','$utilisateur->cin',
               ' $utilisateur->email', $utilisateur->role)") or die(print_r($conn->errorInfo()));
                return $ut;
            }

      }

    
    ?>