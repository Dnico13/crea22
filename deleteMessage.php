<?php
require_once './pdo.php';

function deleteMessage($pdo){
        
        
        $Id_Sup= $_GET['Id'];
        $Id_Supp= $Id_Sup;
        $newid = intval($Id_Supp)+1;

        $query  = $pdo->prepare("DELETE FROM `Message`WHERE Id_contact = :Id_sup");

        $query-> bindParam(':Id_sup' , $newid);
        $query->execute();

        $query1  = $pdo->prepare("DELETE FROM `Contact` where Id= :Id_supp");
        $query1 -> bindParam(':Id_supp', $newid);
        $query1->execute();
        
        header('location: ./InterfAdminis.php');
}

deleteMessage($pdo);

//<?= htmlspecialchars($_SERVER["PHP_SELF"]); 
//if($_SERVER['REQUEST_METHOD']== "GET")
?>
       
        
       