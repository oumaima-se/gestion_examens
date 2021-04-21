<?php
$nom_prof = "";
$id_prof = "";
if(isset($_GET["id_prof"]))
{
    $id_prof=$_GET["id_prof"];
    if(!empty($id_prof) && is_numeric($id_prof))
    {
        include("connexion.php");
        include("session.php");
		$query = "SELECT * FROM professeur WHERE id_prof=$id_prof";
        $result = $conn->query($query);
        $data = $result->fetchAll();
        $nom_prof = $data[0]["nom_prof"];
        $id_prof = $data[0]["id_prof"];
    }
}
if(isset($_POST["nom_prof"]) && isset($_POST["id_prof"]))
{
    $nom_prof = $_POST["nom_prof"];
    $id_prof = $_POST["id_prof"];
	if(!empty($nom_prof) && !empty($id_prof) && preg_match("/[A-Za-z0-9 ]{3,30}/",$nom_prof) && is_numeric($id_prof))
	{
        include("connexion.php");
        include("session.php");
		$query = "UPDATE professeur SET nom_prof='$nom_prof' WHERE id_prof=$id_prof";
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
	<h1> Modifier un professeur </h1>
	<form method="post" action="#">
		module :<input type="text" pattern="[A-Za-z0-9 ]{3,30}" name="nom_prof" value="<?php echo $nom_prof?>"/>
                <input class = "btn modifier" type="submit" value="modifier" />
                <input type="hidden" name="id_prof" value="<?php echo $id_prof?>"/>
	</div>
</form>
</body>

</html>