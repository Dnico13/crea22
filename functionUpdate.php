<?php

$user_id = $_GET['id'];

UpdateUser($pdo);
function UpdateUser($pdo)
{
    try 
    {   
        $user_id = $_GET['id'];
        $new_email= $_POST['Email'];
        $new_name= $_POST['Name'];
        $new_firstname= $_POST['Firstname'];
        $new_role= $_POST ['Role'];
        
        $query  = $pdo->prepare("UPDATE User SET Email= '(:email)', Name='(:name)', Firstanme='(:prenom)', Role='(:role)'  WHERE Id=(:id)");
        
        
        
        $query->bindParam(':id', $user_id);
        $query->bindParam(':email', $new_email);
        $query->bindParam(':name', $new_name);
        $query->bindParam(':prenom', $new_firstname);
        $query->bindParam(':role', $new_role);
        
        $query->execute();
        $UpdateUser = $query->fetchAll(PDO::FETCH_ASSOC);
        
        header ('Location: interfAdminis.php');
        return $UpdateUser; 
        
    }  catch (PDOException $e) {
            echo 'la suppression ne passe pas';
    }
}

