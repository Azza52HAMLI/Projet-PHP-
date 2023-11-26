<!DOCTYPE html>
<html>
<head>
	<title>Administration des plats</title>
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
</head>
<body>
	<section>
	<h1>Liste des plats</h1>
	<?php
	echo"<table>";
	echo"	<thead>";
		
	echo"<tr>";
	echo"<th>Nom du plat</th>";
	echo"<th>Code</th>";
	echo"<th>Prix</th>";
	echo"<th>Score</th>";
	echo"<th>Nombre de plats préparés</th>";
		echo"<th>Suppression</th>";
	echo"<th>Nombre de plats commandés</th>";

	echo"</tr><br>";
	echo"</thead><br>";
	echo"<tbody><br>";
		
include('../MODELE/plat.php');
$listPlat = plat::AfficherPlats();

foreach ($listPlat as $plat) {
	echo "<tr>";
	echo "<td>".$plat->nom."</td>";
	echo "<td>".$plat->code."</td>";

	echo "<td>".$plat->prix."</td>";
	echo "<td>".$plat->score."</td>";
	echo "<td>0</td>";
	echo "<td><a href='platsCommandees.php?refc=".$plat->code.">1</a></td>";
	echo "<td><a href='../CONTOLEURS/Control_Administration.php?refSupp=".$plat->code.">Supprimer</a></td>";
	echo "</tr>";
}




	echo"</tbody>";
	echo"</table>";
	echo "<br><br><br>";
	
	?>

<br><br><br>
	</section>
<br><br><br>
<section>
  <div  class="description">
	
  <center><h2>Ajouter un nouveau plat</h2></center>
	<form action="../CONTOLEURS/Control_Administration.php" method="POST">
	
	<label for="code">Code :</label>
		<input type="text" id="code" name="code" required><br>


	<label for="nom">Nom du plat :</label>
		<input type="text" id="nom" name="nom" required><br>

	
		

		<label for="description">description plat :</label>
		<input type="text" id="description" name="description" required><br>

		<label for="prix">Prix :</label>
		<input type="text" id="prix" name="prix"  required><br>

		<label for="score">Score :</label>
		<input type="text" id="score" name="score"  required><br>

		<label for="nbscore">nbScore :</label>
		<input type="text" id="nbscore" name="nbscore" required><br>
		
		<label for="nb_préparés">nb_préparés :</label>
		<input type="number" id="nbp" name="nbp" required><br>
		
		<label for="nb_comandés">nb_commandés:</label>
		<input type="number" id="nbc" name="nbc" required><br>

		<input type="submit" value="Ajouter plat" name="submit"  >
	</form>
  </div>
  </section>
 
</body>
</html>

