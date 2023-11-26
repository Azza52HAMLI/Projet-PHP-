 
 <!DOCTYPE html>
<html>
<head>
	<title>Plats Commandés</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

	<h1>la liste des demandes de préparation</h1>
	<table>
		<thead>
			<tr>
				<th>Numéro de commande</th>
				<th>ETAT</th>
				<th>Nom du client</th>
				<th>Plat commandé</th>
				<th>Préparation achevée</th> 

			</tr>

		</thead>
		<tbody>
		<?php

	  include("../MODELE/commandePlat.php");

	$listcommande = commandePlat::AfficherCommande();

	foreach ($listcommande as $cP) {
		
		echo "<tr>";
		echo "<td>" . $cP->id ."</td>";
		echo "<td>" . $cP->etat . "</td>";
		echo "<td>" . $cP->login . "</td>";
		echo "<td>" . $cP->code . "</td>";
		
		echo "<td><a href=\"platsCommandees.php?id=" . $cP->id . "\">Préparation achevée</a></td>";
		if(isset($_GET['code'])){
			$code=$POST['id'];
		//	$nb=commandePlat::updateEtat($id);
			if($nb>0)
			echo"etat préparé";
		}
		echo "</tr>";
	}
		echo "</table>"   ;

		?>
			
		</tbody>
	
	</table>

       
</body>
</html>
