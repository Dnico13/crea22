<?php
require_once './top.php';
require_once './pdo.php';
require 'functionCreate.php';
$utilisateurs = getUtilisateur($pdo);
$details = getDetailetImage($pdo);

?>

<body>
    <header>

        <h1 class="h1 text-center text-primary">
            Interface d'administration
        </h1>

    </header>
    <main>
        <!-- Debut creation des gestionnaires du site -->
        <form class="w-50 m-auto" action="createUsers.php" method="POST" target="_self">
            <div class="mb-3">
                <label for="Email" class="form-label">Email:</label>
                <input type="email" name="Email" class="form-control" id="Email">
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Nom:</label>
                <input type="text" name="Name" class="form-control" id="Name">
            </div>
            <div class="mb-3">
                <label for="Firstname" class="form-label">Prenom:</label>
                <input type="text" name="Firstname" class="form-control" id="Firstname">

            </div>
            <!--<div class="mb-3">
                <label for="Role" class="form-label">Role:</label>
                <input type="text" name="Role" class="form-control" id="Role">

            </div>-->
            <div class="mb-3">
            <label for="Role" class="form-label">Role:</label>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="Role" id="Role">
                    <option selected class="active">Choisir un Role ci dessous:</option>
                    <option value="Admin">Administrateur</option>
                    <option value="Employe">Employé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password:</label>
                <input type="password" name="Password" class="form-control" id="Password">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Envoi du formulaire</button>
            </div>
        </form>


        <!-- Validation d'envoi des donnees en methode $_Post-->

        <?php



        creatUser($pdo);


        ?>

    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>