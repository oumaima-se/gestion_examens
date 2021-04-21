<?php
if(isset($_GET["n_salle"]))
{
    $n_salle = $_GET["n_salle"];
    if(!empty($n_salle) && is_numeric($n_salle))
    {
        include("connexion.php");
        include("session.php");
        $requete1 = "DELETE FROM salle WHERE n_salle=$n_salle";
        $conn->exec($requete1);
        header("Location:affichage_salle.php");
    }
}
?>