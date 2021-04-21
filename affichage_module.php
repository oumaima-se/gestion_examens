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
    <h1> Liste des modules</h1>
    <table>
        <tr><th>id_m</th><th>Module</th><th>Actions</th></tr>
        <?php 
        include("connexion.php");
        include("session.php");
        $requete = "SELECT * FROM module";
        $result = $conn->query($requete);
        $data = $result->fetchAll();
        for($i=0; isset($data[$i]); $i++){
            $id_m=$data[$i]["id_m"];
            $nom_module=$data[$i]["nom_module"];
            echo "<tr><td>$id_m</td><td>$nom_module</td>";
            echo"<td>";
            echo "<a href='supprimer_module.php?id_m=$id_m' class='btn supprimer'>supprimer</a>";
            echo "<a href='modifier_module.php?id_m=$id_m' class='btn modifier'>modifier</a>";  
            echo "</tr>";
        }
        ?>
    </table>
    </center>
    
    </div>
</body>

</html>