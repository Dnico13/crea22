<?php
require_once './top.php';
require_once './pdo.php';






?>

<body>
    <header>

        <h1 class="h1 text-center text-primary">
            Interface d'administration
        </h1>

    </header>

    <main>

        <!-- Debut de la partie administrateur et utilisateur du site -->
        <div class="container">
            <div class="row">
                <h3 class="text-center  text-primary mb-3">Grille des Utilisateurs </h3>
            </div>
            <div class="row">


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center" method="POST">
                    <table class="table table-striped table-bordered backgroungarray">
                        <thead class="text-primary">
                            <tr>

                                <th>Email:</th>
                                <th>Nom:</th>
                                <th>Prenom:</th>
                                <th>Role:</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            require 'functionRead.php';
                            $readUser = readUser($pdo);


                            foreach ($readUser as $clefs => $Users) { ?>

                                <tr>
                                    <td><input type="email" name="Email" placeholder=" <?= $Users['Email']; ?>"> </td>
                                    <td> <input type="text" name="Name" placeholder=" <?= $Users['Name']; ?>"></td>
                                    <td><input type="text" name="Firstname" placeholder="<?= $Users['Firstname']; ?>"> </td>
                                    <td> <input type="text" name="Role" placeholder="<?= $Users['Role']; ?>"></td>

                                </tr>



                            <?php } ?>


                        </tbody>
                    </table>
                    <button type="summit" class="btn btn-secondary">Mise à Jour</button>
                </form>
                
                <?php
                // insertion des variables
                //$Email=$_Post["Email"];
                //$Name= $_POST["Name"];
                //$Firstname=$_POST["Firstname"];
                //$Role=$_POST["Role"];
//var_dump($_REQUEST);
var_dump($_GET);
//var_dump($_POST);
                function UpdateUser($pdo)
                {
                    try {  
                
                        $query  = $pdo->prepare("UPDATE User SET Email= :email, Name= :name, Firstname=:firstname, Role=:role  WHERE Id=:id");
                        
                        $Id_table= (int)$_GET['id'];
                        
                        $query->bindParam(':id',$Id_table) ;
                        $query->bindParam(':email', $_POST['Email']);
                        $query->bindParam(':name', $_POST['Name']);
                        $query->bindParam(':firstname', $_POST['Firstname']);
                        $query->bindParam(':role', $_POST['Role']);
                        

                        $query->execute();
                        $UpdateUser = $query->fetch(PDO::FETCH_ASSOC);
                        return $UpdateUser;
                        header('location: InterfAdminis.php');
                        
                    } catch (PDOException $e){
                        echo 'la creation  n\'a pas abouti';
                    }
                    } 
                    
                    $UpdateUser= UpdateUser($pdo);
                    


                ?>




            </div>
        </div> <!-- /container -->
        <!-- Fin de la partie administrateur et utilisateur -->




    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>