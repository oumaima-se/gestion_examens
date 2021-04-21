<?php
if(isset($_GET["id_m"]))
{
    $id_m = $_GET["id_m"];
    if(!empty($id_m) && is_numeric($id_m))
    {
        include("connexion.php");
        include("session.php");
        $requete1 = "DELETE FROM module WHERE id_m=$id_m";
        $conn->exec($requete1);
        header("Location:affichage_module.php");
    }
}
?>