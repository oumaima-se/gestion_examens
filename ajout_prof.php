<?php
$nom_prof="";
if(isset($_POST["nom_prof"]))
{
	$nom_prof = $_POST["nom_prof"];
	if(!empty($nom_prof) && preg_match("/[A-Za-z0-9 ]{3,30}/",$nom_prof))
	{
		include("connexion.php");
		include("session.php");
		$query = "INSERT INTO professeur VALUES(NULL,'$nom_prof')";
		$conn->exec($query);
		header("Location:affichage_prof.php");
	}
}
?>

<html>
<head>
  <title>Ajout</title>
  <link rel="stylesheet" href="ajout.css" />
</head>
<body>
<ul>
    <li><a class="active" href="dashboard.php">Dashboard</a></li>
    <li><a href= "logout.php">Sign Out</a></li>
</ul>
	<div class="container">
	<h1> Ajout d'un professeur </h1>
	<form method="post" action="#">
		professeur :<input type="text" pattern="[A-Za-z0-9 ]{3,30}" name="nom_prof" value="<?php echo $nom_prof?>"/>
					<input class = "btn ajout" value="ajouter" type="submit" />
	</div>	
	</form>			
	<br>
</body>

</html>