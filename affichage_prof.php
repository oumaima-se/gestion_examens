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
	<h1> Liste des professeurs</h1>
    <table>
        <tr><th>id_prof</th><th>Professeur</th><th>Actions</th></tr>
        <?php 
        include("connexion.php");
        include("session.php");
        $requete = "SELECT * FROM professeur";
        $result = $conn->query($requete);
        $data = $result->fetchAll();
        for($i=0; isset($data[$i]); $i++){
            $id_prof=$data[$i]["id_prof"];
            $nom_prof=$data[$i]["nom_prof"];
            echo "<tr><td>$id_prof</td><td>$nom_prof</td>";
            echo"<td>";
            echo "<a href='supprimer_prof.php?id_prof=$id_prof' class='btn supprimer'>supprimer</a>";
            echo "<a href='modifier_prof.php?id_prof=$id_prof' class='btn modifier'>modifier</a>";  
            echo "</tr>";
        }
        ?>
    </table>
    </center>
    
    </div>
</body>

</html>