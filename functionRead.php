<?php
function readUser($pdo)
{
       try
       { $identification = $_GET['id'];
         $query  = $pdo->prepare("SELECT * FROM User WHERE Id=($identification)");

        
        $query->execute();
        $readUser = $query->fetchAll(PDO::FETCH_ASSOC);
        return $readUser;
       } catch (PDOException $e) {
        echo 'la lecture ne passe pas';
}
}