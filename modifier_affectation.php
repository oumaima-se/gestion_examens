<?php
include("connexion.php");
include("session.php");
$id="";
$nom_prof="";
$nom_module="";
$n_salle="";
$heure_date="";

$requete1 = "SELECT nom_prof FROM professeur";


    $stmt=$conn->prepare($requete1);
    $stmt->execute();
    $results=$stmt->fetchAll();


$requete2 = "SELECT nom_module FROM module";

try {
    $stmt1=$conn->prepare($requete2);
    $stmt1->execute();
    $results1=$stmt1->fetchAll();


    $requete3 = "SELECT n_salle FROM salle";


    $stmt2=$conn->prepare($requete3);
    $stmt2->execute();
    $results2=$stmt2->fetchAll();

}
catch(Exception $ex)
{
 echo ($ex->getMessage());
}
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
    
if(isset($_POST["submit"])){

        $nom_prof=$_POST["prof_select"];
        $nom_module=$_POST["module_select"];
        $n_salle=$_POST["salle_select"];
        $heure_date=$_POST["heure_date"];

        $requete_ins = "UPDATE affectation SET nom_prof='$nom_prof', nom_module='$nom_module', n_salle='$n_salle', heure_date='$heure_date' WHERE id=$id";
		$conn->exec($requete_ins);
}

if(isset($_POST["afficher"])){
    header("Location:resultat_affectation.php");
}

?>
<html>

<head>
<title> SEARCH AND ADD </title>
<meta charset="utf-8">
<link rel="stylesheet" href="ajout.css">
</head>

<body>
<ul>
    <li><a class="active" href="dashboard.php">Dashboard</a></li>
    <li><a href= "logout.php">Sign Out</a></li>
</ul>
<form method="post" action="#">
    <div class="container">
    <br>
    <br>
<h1> AFFECTATION EXAMEN </h1>
<center>
    <label>Professeur:
    <select name="prof_select">
        <option>--Choisissez le professeur--</option>
        <?php foreach ($results as $output) { ?>
        <option><?php echo $output["nom_prof"];?></option>
        <?php } ?>
    </select>

    </label>

    <label>module:
    <select name="module_select">
        <option>--Choisissez le module--</option>
        <?php foreach ($results1 as $output) { ?>
        <option><?php echo $output["nom_module"];?></option>
        <?php } ?>
    </select>

    </label>

    <label>Salle:
    <select name="salle_select">
        <option>--Choisissez la salle--</option>
        <?php foreach ($results2 as $output) { ?>
        <option><?php echo $output["n_salle"];?></option>
        <?php } ?>
    </select>

    </label> 
    <label>Heure et Date:
        <input name="heure_date" type="datetime-local" />
    </label>
    <input type="submit" name="submit" class="affectation" value="AFFECTER"/>
    <button name="afficher" class="button" >AFFICHER</button>
    </center>
</form>
</body>
</html>