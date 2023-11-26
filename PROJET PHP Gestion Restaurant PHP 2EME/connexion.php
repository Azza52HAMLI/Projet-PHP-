

<?php
try
{
$conn = new PDO('mysql:host=localhost;dbname=BDRestaurant', 'root','');
}
catch (PDOException $e)
{
die('Erreur : ' . $e->getMessage());
}

?>