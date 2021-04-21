<?php
$nom_module = "";
$id_m = "";
if(isset($_GET["id_m"]))
{
    $id_m=$_GET["id_m"];
    if(!empty($id_m) && is_numeric($id_m))
    {
        include("connexion.php");
        include("session.php");
		$query = "SELECT * FROM module WHERE id_m=$id_m";
        $result = $conn->query($query);
        $data = $result->fetchAll();
        $nom_module = $data[0]["nom_module"];
        $id_m = $data[0]["id_m"];
    }
}
if(isset($_POST["nom_module"]) && isset($_POST["id_m"]))
{
    $nom_module = $_POST["nom_module"];
    $id_m = $_POST["id_m"];
	if(!empty($nom_module) && !empty($id_m) && preg_match("/[A-Za-z0-9 ]{3,30}/",$nom_module) && is_numeric($id_m))
	{
        include("connexion.php");
        include("session.php");
		$query = "UPDATE module SET nom_module='$nom_module' WHERE id_m=$id_m";
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
	<h1> Modifier un module </h1>
	<form method="post" action="#">
		module :<input type="text" pattern="[A-Za-z0-9 ]{3,30}" name="nom_module" value="<?php echo $nom_module?>"/>
                <input class = "btn modifier" type="submit" value="modifier" />
                <input type="hidden" name="id_m" value="<?php echo $id_m?>"/>
	</div>
</form>
</body>

</html>