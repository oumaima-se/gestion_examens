<html>
<head>
    <title>Affectation</title> 
    <link rel="stylesheet" href="affichage_list.css" />
</head>
<body>
    <ul>
        <li><a class="active" href="dashboard.php">Dashboard</a></li>
        <li><a href= "logout.php">Sign Out</a></li>
    </ul>
	<div class="container">
    <center>
	<h1> Liste des affectations</h1>
    <table>
        <tr><th>id</th><th>Professeur</th><th>Module</th><th>Salle</th><th>Heure et date</th><th>Actions</th></tr>
        <?php 
        include("connexion.php");
        include("session.php");
        $requete = "SELECT * FROM affectation";
        $result = $conn->query($requete);
        $data = $result->fetchAll();
        for($i=0; isset($data[$i]); $i++){
            $id=$data[$i]["id"];
            $nom_prof=$data[$i]["nom_prof"];
            $nom_module=$data[$i]["nom_module"];
            $n_salle=$data[$i]["n_salle"];
            $heure_date=$data[$i]["heure_date"];
            echo "<tr><td>$id</td><td>$nom_prof</td><td>$nom_module</td><td>$n_salle</td><td>$heure_date</td>"; 
            echo"<td>";
            echo "<a href='supprimer_affectation.php?id=$id' class='btn supprimer'>supprimer</a>";
            echo "<a href='modifier_affectation.php?id=$id' class='btn modifier'>modifier</a>";  
            echo "</tr>";
        }
        ?>
    </table>
    </center>
    
    </div>
</body>

</html>