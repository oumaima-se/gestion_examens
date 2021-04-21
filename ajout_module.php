<?php
$nom_module= "";

if(isset($_POST["nom_module"]))
{
	$nom_module = $_POST["nom_module"];
	if(!empty($nom_module) && preg_match("/[A-Za-z0-9 ]{3,30}/",$nom_module))
	{
		include("connexion.php");
		include("session.php");
		$query = "INSERT INTO module VALUES(NULL,'$nom_module')";
		$conn->exec($query);
		header("Location:affichage_module.php");
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
	<h1> Ajout d'un module </h1>
	<form method="post" action="#">
		nom module :<input type="text" pattern="[A-Za-z0-9 ]{3,30}" name="nom_module" value="<?php echo $nom_module?>"/>
				<input class = "btn ajout" value="ajouter" type="submit" />
	</div>
	</form>	
	<br>
</body>

</html>