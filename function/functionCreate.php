<?php



function creatUser($pdo)
{
  if (isset($_POST['Password'])){
      try { 
        
        $name= htmlspecialchars($_POST['Name']);
        $email= htmlspecialchars($_POST['Email']); 
        $firstname= htmlspecialchars($_POST['Firstname']) ;
        $role= htmlspecialchars($_POST['Role']);

        $query  = $pdo->prepare('INSERT INTO User (Email, Name, Firstname, Role, Password) VALUES (:email, :name, :firstname, :role, :password)');

        $motDePasse = htmlspecialchars($_POST['Password']);
        $hachage = password_hash($motDePasse, PASSWORD_DEFAULT);

        $query->bindParam(':email',$email );
        $query->bindParam(':name', $name);
        $query->bindParam(':firstname',$firstname );
        $query->bindParam(':role', $role);
        $query->bindParam(':password', $hachage);

        $query->execute();
        $creatUser = $query->fetchAll(PDO::FETCH_ASSOC);
        //return $creatUser;
        header('location: ./InterfAdminis.php');
        unset($_POST);
      } catch (PDOException $e){
        echo ' Veuillez verifier vos information.<br>
              La creation de votre nouveau gestionnaire n\'a pas abouti';
      }
    } 
  }


  