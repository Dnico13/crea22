<?php
require_once'../pdo.php';

function deleteRealisation ($pdo) {

if  ($_SERVER['REQUEST_METHOD']== "GET"){

        $Id_sup= $_GET['Id'];
        
        
        $query  = $pdo->prepare("DELETE FROM Picture WHERE Id_Real = :Id_sup");

        $query-> bindParam(':Id_sup' , $Id_sup);
        $query->execute();

        $query1  = $pdo->prepare("DELETE FROM Realisation where Id= :Id_supp");
        $query1 -> bindParam(':Id_supp', $Id_sup);
        $query1->execute();
        
        header('location: ../InterfAdminis.php');
}
}

deleteRealisation($pdo);