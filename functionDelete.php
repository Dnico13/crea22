<?php
require_once './pdo.php';

function deleteUser($pdo){
    
        $user_id = $_GET['id'];
        $user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM User WHERE Id= :id");
        $query->bindParam(':id', $user_id_int);
        
        $query->execute();
        
        
        header('Location: ./interfAdminis.php');
        
        
     
}
deleteUser($pdo);

// partie a verifier 

//<?php
//if ($_GET['modifier_annonces']) {
 //$user_id = $_GET['id'];   
//?>