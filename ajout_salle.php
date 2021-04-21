<?php
$n_salle="";
if(isset($_POST["n_salle"]))
{
	$n_salle = $_POST["n_salle"];
	if(!empty($n_salle) && preg_match("/[0-9 ]{1,5}/",$n_salle))
	{
		include("connexion.php");
		include("session.php");
		$query = "INSERT INTO salle VALUES(NULL,'$n_salle')";
		$conn->exec($query);
		header("Location:affichage_salle.php");	
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
	<h1> Ajout d'une salle </h1>
	<form method="post" action="#">
		salle :	<input type="text" pattern="[0-9 ]{1,5}" name="n_salle" value="<?php echo $n_salle?>"/>
				<input class = "btn ajout" value="ajouter" type="submit" />
	</div>
	</form>	
</body>

</html>