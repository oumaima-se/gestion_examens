<html>
<head>
    <title>Liste</title> 
    <link rel="stylesheet" href="affichage_list.css" />
</head>
<body>
<ul>
    <li><a class="active" href="dashboard.php">Dashboard</a></li>
    <li><a href= "logout.php">Sign Out</a></li>
</ul>
	<div class="container">
    <center>
	<h1> Liste des salles</h1>
    <table>
        <tr><th>Salle</th><th>Actions</th></tr>
        <?php 
        include("connexion.php");
        include("session.php");
        $requete = "SELECT * FROM salle";
        $result = $conn->query($requete);
        $data = $result->fetchAll();
        for($i=0; isset($data[$i]); $i++){
            $n_salle=$data[$i]["n_salle"];
            $id_salle=$data[$i]["id_salle"];
            echo "<tr><td>$n_salle</td>";
            echo"<td>";
            echo "<a href='supprimer_salle.php?id_salle=$id_salle' class='btn supprimer'>supprimer</a>";
            echo "<a href='modifier_salle.php?id_salle=$id_salle' class='btn modifier'>modifier</a>";  
            echo "</tr>";
        }
        ?>
    </table>
    </center>
    </div>
</body>

</html>