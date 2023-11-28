<?php
require 'pdo.php';
$user_id = $_GET['id'];
var_dump($_GET['id']);
deleteUser($pdo);
function deleteUser($pdo)
{
    try 
    {   
        $user_id = $_GET['id'];
        
        $query  = $pdo->prepare("DELETE FROM User WHERE Id=(:id)");
        $query->bindParam(':id', $user_id);
        
        $query->execute();
        $deleteUser = $query->fetchAll(PDO::FETCH_ASSOC);
        return $deleteUser;
        header ('Location: interfAdminis.php');
        
        
    }  catch (PDOException $e) {
            echo 'la suppression ne passe pas';
    }
}


// partie a verifier 

//<?php
//if ($_GET['modifier_annonces']) {
    // Connexion à la base de données
    // Suppression de l'entrée avec l'ID spécifié
  //  $id = $_GET['modifier_annonces'];
    //$sql = "DELETE FROM annonces_photo WHERE id_annonces = '$id'";
   // mysql_query($sql);
//}
//?>