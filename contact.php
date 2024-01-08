<?php
require_once './template//top.php';
require_once './pdo.php';

        
            if ($_SERVER["REQUEST_METHOD"] === "POST") 
            {
               $nom= htmlspecialchars($_POST['nom']);
               $prenom= htmlspecialchars($_POST['prenom']);
               $email=  htmlspecialchars($_POST['email']);
               $telephone= htmlspecialchars($_POST['telephone']);
               $message= htmlspecialchars($_POST['message']);



                $query= $pdo->prepare('INSERT INTO Contact (Nom, Firstname, Email, NumberPhone )  VALUES (:Nom, :Firstname, :email, :telephone)');
                                        
                    $query->bindParam(':Nom',$nom);
                    $query->bindParam(':Firstname',$prenom);
                    $query->bindParam(':email',$email);
                    $query->bindParam(':telephone',$telephone);
                    
                    
                    $query-> execute();

                    $id_contact = $pdo->lastInsertId();

                    

                    $query2 = $pdo->prepare('INSERT INTO Message (Message, Id_contact) VALUES (:message, :id_contact)');
                    $query2->bindParam(':message', $message);
                    $query2->bindParam(':id_contact', $id_contact);

                    $query2->execute();
                    header('location: ./accueil.php'); 
            }

        
?>

<body>
    <?php

    require_once './template/navbar.php';
    ?>
    <main class="ContenaireContact mb-3">

        <div class="coordonees">
            <div class="h3 text-center">Formulaire de Contact</div>
            <p>Contactez moi</p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <a href="telto:0669247972">06 69 24 79 72</a>
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
                <a href="mailto:contactcrea22@gmail.com">contactcrea22@gmail.com</a>
            </p>
            <p>
                <a href="https://www.facebook.com/crea22architecturedinterieur/?locale=fr_FR" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/crea22.architecturedinterieur/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
            </p>
            <p> ou en remplissant le formulaire ci-dessous</p>


            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="Post">

                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br><br>
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" id="telephone" name="telephone"  pattern="[0-9]{10}" required data-error="Veuillez entrer un numéro de téléphone valide." placeholder="0606060606"><br><br>
                <Label for="message">Message:</Label>
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Laissez votre message ici..." required></textarea>
                <input type="submit" onclick="return send()" placeholder="Envoyer" class="mt-2" >

            </form>
       
            

        </div>
    </main>
    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/alerte.js"></script>
</body>


</html>