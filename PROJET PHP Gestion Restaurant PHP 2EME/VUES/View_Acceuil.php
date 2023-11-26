<html>

<head>
    <title>Acceuil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../style.css">
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
      <style>
      table {
        font-family: Arial, sans-serif;
       border-collapse: collapse;
        margin-bottom: 20px;
      width: 100%;
}

th, td {
  border: 1px solid #ddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  color: #333;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  tr:hover {
    background-color: #ddd;
  }
  
</style>
</head>

   





<body>
        


<center>
    <h1>liste plats</h1> 
<table >
<tr>
    <th>Nom</th>
    <th>code</th>
  
    <th>prix</th>
    <th>score </th>
    <th>Etat de commande</th>
    
</tr></br></center></br></br></br></br>




    
<?php

        include("../MODELE/plat.php");
        include("../MODELE/utilisateur.php");
include("../MODELE/commandePlat.php");

//session_start();
//$u = $_SESSION["utilisateur"];
      
    $listPlats = plat::AfficherPlats();
 
    
         foreach ($listPlats as $plat) {

    
          echo "<tr><td><a href='../VUES/descriptionPlat.php?nom=" . $plat->nom ."&description=" . $plat->description . "&prix=" . $plat->prix ."&code=" . $plat->code.  "'>$plat->nom</a></td>";

          echo "<td>" . $plat->code . "</td>";
       echo "<td>" . $plat->prix . "</td>";
            echo "<td>" . $plat->score . "</td>";
          
            //$code=$plat->code;
            
           // echo '<td> <form action="../CONTOLEURS/Control_Acceuil.php" method="post" ><input type="submit" name= "commande" value="je veux commander"></form></td>';
         
echo "<td><a href='../CONTOLEURS/Control_Acceuil.php?refcode=".$plat->code."'>je veux commander</a></td>";




          
         }
      
        
          echo "</tr>";  
      
        echo "</table>"   ;
        
        ?>

        
    </br>  </br>  </br>
        
      
       
      
</body>

</html>
