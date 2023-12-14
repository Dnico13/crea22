<?php



if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if ($query = $pdo->prepare("SELECT * FROM User WHERE Email=:Email")) 
    {
        
        $query->bindParam(":Email", $Email);
        if ($query->execute()) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($Password, $row['Password'])) {
            
            setcookie('role','admin',time() +3600, '/');
            
            header('location: ./InterfAdminis.php');
        } else {
            echo("<H3 class='text-center h3 text-danger'> Merci de corriger les erreurs de saisie</H3>");
            
                }
        }
    }
}

