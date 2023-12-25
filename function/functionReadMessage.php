<?php

function readMessages($pdo)
{
       try
       { 
        
         $query  = $pdo->prepare("SELECT * FROM Contact INNER JOIN Message ON Contact.Id = Message.Id_contact");

        
        $query->execute();
        $readMessages = $query->fetchAll(PDO::FETCH_ASSOC);
        return $readMessages;
       } catch (PDOException $e) {
        echo 'la lecture ne passe pas';
}
}



