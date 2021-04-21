<?php
$n_salle = "";
$id_salle = "";
if(isset($_GET["id_salle"]))
{
    $id_salle=$_GET["id_salle"];
    if(!empty($id_salle) && is_numeric($id_salle))
    {
        include("connexion.php");
        include("session.php");
		$query = "SELECT * FROM salle WHERE id_salle=$id_salle";
        $result = $conn->query($query);
        $data = $result->fetchAll();
        $n_salle = $data[0]["n_salle"];
        $id_salle = $data[0]["id_salle"];
    }
}
if(isset($_POST["n_salle"]) && isset($_POST["id_salle"]))
{
    $n_salle = $_POST["n_salle"];
    $id_salle = $_POST["id_salle"];
	if(!empty($n_salle) && !empty($id_salle) && preg_match("/[0-9 ]{1,5}/",$n_salle) && is_numeric($id_salle))
	{
        include("connexion.php");
        include("session.php");
		$query = "UPDATE salle SET n_salle='$n_salle' WHERE id_salle=$id_salle";
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
	<h1> Modifier une salle </h1>
	<form method="post" action="#">
		module :<input type="text" pattern="[0-9 ]{1,5}" name="n_salle" value="<?php echo $n_salle?>"/>
                <input class = "btn modifier" type="submit" value="modifier" />
                <input type="hidden" name="id_salle" value="<?php echo $id_salle?>"/>
	</div>
</form>
</body>

</html>