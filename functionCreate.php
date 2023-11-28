<?php



function creatUser($pdo)
{
      try {  $motDePasse = $_POST['Password'];
        $hachage = password_hash($motDePasse, PASSWORD_DEFAULT);
   
        $query  = $pdo->prepare('INSERT INTO User (Email, Name, Firstname, Role, Password) VALUES (:email, :name, :firstname, :role, :password)');

        $query->bindParam(':email', $_POST['Email']);
        $query->bindParam(':name', $_POST['Name']);
        $query->bindParam(':firstname', $_POST['Firstname']);
        $query->bindParam(':role', $_POST['Role']);
        $query->bindParam(':password', $hachage);

        $query->execute();
        $creatUser = $query->fetchAll(PDO::FETCH_ASSOC);
        return $creatUser;

        unset($_POST);
      } catch (PDOException $e){
        echo 'la creation  n\'a pas abouti';
      }
    } 


