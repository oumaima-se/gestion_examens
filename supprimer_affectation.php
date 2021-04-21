<?php
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if(!empty($id) && is_numeric($id))
    {
        include("connexion.php");
        include("session.php");
        $requete1 = "DELETE FROM affectation WHERE id=$id";
        $conn->exec($requete1);
        header("Location:resultat_affectation.php");
    }
}
?>