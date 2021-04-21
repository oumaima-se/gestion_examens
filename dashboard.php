<?php  
include('connexion.php');
session_start();
if(!isset($_SESSION["username"])){
   header("Location:loginpage.php");
}

?>
<html>
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="dashboard.css">
   </head>
   
   <body>
   <ul>
      <li><a class="active" href="dashboard.php">Dashboard</a></li>
      <li><a href= "logout.php">Sign Out</a></li>
   </ul>
   <?php
   if(isset($_SESSION["username"]))  
      {  
         echo '<h3 class="welcome" >Login Succeded, Welcome - '.$_SESSION["username"].'</h3>';  
      } 
   ?>
   
      <div class="dropdown">
      <button class="dropbtn"><h3>Gestion module</h3></button>
         <div class="dropdown-content">
         <a href="ajout_module.php">Ajout module</a>
         <a href="affichage_module.php">Affichage liste modules</a>
         </div>
      </div>

      <br>
      <br>

      <div class="dropdown">
      <button class="dropbtn"><h3>Gestion professeur</h3></button>
         <div class="dropdown-content">
         <a href="ajout_prof.php">Ajout professeur</a>
         <a href="affichage_prof.php">Affichage liste professeurs</a>
         </div>
      </div>

      <br>
      <br>

      <div class="dropdown">
      <button class="dropbtn"><h3>Gestion salle</h3></button>
         <div class="dropdown-content">
         <a href="ajout_salle.php">Ajout salle</a>
         <a href="affichage_salle.php">Affichage liste salles</a>
         </div>
      </div>

      <br>
      <br>

      <div class="dropdown">
      <button class="dropbtn"><h3>Gestion affectation</h3></button>
         <div class="dropdown-content">
         <a href="affectation.php">Affectation professeur-module-salle</a>
         <a href="resultat_affectation.php">Affichage liste affectation</a>
         </div>
      </div>
      
   </body>

   
</html>