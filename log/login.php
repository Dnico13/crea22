<?php



if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    try{
    $Email = htmlspecialchars($_POST['Email']);
    $Password = htmlspecialchars($_POST['Password']);

    if ($query = $pdo->prepare("SELECT * FROM User WHERE Email=:Email")) 
    {
     
        $query->bindParam(":Email", $Email);
        if ($query->execute()) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($Password, $row['Password'])) {
            
            $_SESSION['role'] = $row['Role'];
            setcookie("crea22", $_SESSION['role'], time() + 600, "/");

            
            header('location: ./InterfAdminis.php');
        } else {
            echo("<H3 class='text-center h3 text-danger'> Merci de corriger les erreurs de saisie</H3>");
            
                }
        }
        
    }
    } catch (PDOException $e) { 
        echo('une erreur de saisie est apparrue');
            }
}

