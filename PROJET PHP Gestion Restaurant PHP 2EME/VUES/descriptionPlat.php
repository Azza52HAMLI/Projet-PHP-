
<!DOCTYPE html>
<html>
  <head>
    <title>Notre plat</title>
    <link rel="stylesheet" href="../style.css">
    <header>
        <nav>
          <ul>
          
          
            <li><a href="#">Services</a></li>
            <li><a href="#">Livraison</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Informations similaire</a></li>

          </ul>

        </nav> 
      </header>
  </head>
  <body>
 
     
  <h1>Plat</h1>
  <div class="description">
    
<?php


        include("../MODELE/plat.php");
       
        //transmission variable methode 2
        $nom = $_GET["nom"];
       
    
        $description = $_GET["description"]; 
        $prix = $_GET["prix"];
      
         
        echo "<html>";
   
        
        
            echo "<p>    $nom  </p>";
          
            echo "<p>    $description  </p>";
          
            echo "<p>  $prix  </p>";
         

            echo "</html>";
           
         // //}
          
    ?>
     
    
    </div>
    <br><br>
    <div class="image">
 
</div>
<form  action="../CONTOLEURS/control_description.php" method="POST" class="description">Donnez votre avis:<br>
<input type="radio" name="newscore" value="01"> 01<br>
<input type="radio" name="newscore" value="02"> 02<br>
<input type="radio" name="newscore" value="03"> 03 <br>
<input type="radio" name="newscore" value="04"> 04<br>

<input type="radio" name="newscore" value="05"> 05<br>

 <input type="submit" name="submit" value="valider" >
</form>
  </body>
</html>
