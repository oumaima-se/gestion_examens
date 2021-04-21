<?php
if(isset($_GET["id_prof"]))
{
    $id_prof = $_GET["id_prof"];
    if(!empty($id_prof) && is_numeric($id_prof))
    {
        include("connexion.php");
        include("session.php");
        $requete1 = "DELETE FROM professeur WHERE id_prof=$id_prof";
        $conn->exec($requete1);
        header("Location:affichage_prof.php");
    }
}
?>