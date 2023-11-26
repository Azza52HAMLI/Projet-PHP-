<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>inscription</title>

</head>
<style>
   
        .msgRed {
            color: red;
        }
        .msgbrown{
            color: brown;
        }

  

p{
    color: rgb(157, 0, 255);
    font-size: large;
}
</style>


<body>
<div  class="description">
   <center> <h1>Inscription</h1></center><br/><br/>
<table><center>
    <form action="../CONTOLEURS/control_inscription.php" method="post">

    login: <input type="text" name="login"> <?php if (isset($_POST['nom']) && empty($_POST['cin'])) echo "<span class='msgRed'> *Champ Obligatoire! </span>" ?> <br> <br/> <br/> 
<br> <br/> <br/> 

*Password:<input type="password"  name="password"  required  pattern="[a-zA-Z0-9]{8,}"> <br><br/>
**Password:<input type="password"  name="password" required  pattern="[a-zA-Z0-9]{8,}"><br><br/>
       


   nom:<input type="text" name="nom" ><?php if (isset($_POST['cin']) && empty($_POST['nom'])) echo "<span class='msgRed'> *Champ Obligatoire! </span>" ?> <br><br/><br/> 

      cin: <input type="text" name="cin" pattern="[0-9]{8}"><?php if (isset($_POST['nom']) && empty($_POST['cin'])) echo "<span class='msgRed'> *Champ Obligatoire! </span>" ?> <br><br/><br/> 
      e-mail <input type="text"  name="e-mail"><?php if (isset($_POST['nom']) && empty($_POST['e-mail'])) echo "<span class='msgRed'> *Champ Obligatoire! </span>" ?> <br> <br/> <br/> 
      role <input type="number"  name="role"><?php if (isset($_POST['nom']) && empty($_POST['role'])) echo "<span class='msgRed'> *Champ Obligatoire! </span>" ?> <br> <br/> <br/> 
      <input type="submit" value="inscrire" name="submit"  >



    </form>
</center></table> 
</div>
</body>
</html>






    
