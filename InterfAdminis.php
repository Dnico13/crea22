<?php
session_start();

require_once './pdo.php';
require_once './login.php';
require_once './top.php';
//require_once './deleteMessage.php';
require_once './functionReadMessage.php';

$utilisateurs = getUtilisateur($pdo);
$details = getDetailetImage($pdo);

$readMessages = readMessages($pdo);


if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin'||$_SESSION['role'] === 'Employe')
{ ?>

<body>
    <header class="container-fluid d-flex flex-row">

        <h1 class="h1 text-center text-primary text-capitalize fw-bold col-11 align-self-center">
            Interface d'administration

        </h1>
        <!--<a class="btn btn-outline-dark align-self-end col-1">Déconnexion</a>-->
        <form action="./logout.php" method="POST" class="align-self-end col-1">
            <input type="hidden" name="logout" value="">
            <button class="btn btn-outline-dark" type="submit">Déconnexion</button>
        </form>


    </header>

    <main>


        <div class="container">
            <!--visuel de la liste des messages -->
            <div class="row">
                <h3 class="text-center  text-primary  mt-3 mb-4">Reception des messages du formulaire de Contact </h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered backgroungarray">
                    <thead class="text-primary">
                        <tr>

                            <th>Nom:</th>
                            <th>Prenom:</th>
                            <th>Email:</th>
                            <th>Telephone</th>
                            <th>Message</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($readMessages as $cle => $readMessage) { ?>
                            <tr>

                                <td class="fw-bold"> <?= $readMessage['Nom']; ?> </td>
                                <td> <?= $readMessage['Firstname']; ?> </td>
                                <td> <?= $readMessage['Email']; ?> </td>
                                <td> <?= $readMessage['NumberPhone']; ?> </td>
                                <td> <?= $readMessage['Message']; ?> </td>
                                <td class="text-center">
                                    <form action="./deleteMessage.php?=<?= $readMessage['Id']; ?>" method="get">
                                        <input type="hidden" name="Id" value="<?= $readMessage['Id']; ?>">
                                        <button class="btn btn-secondary" type="submit">Supprimer</button>
                                    </form>

                                </td>
                            </tr>
                        <?php } ?>




                    </tbody>
                </table>
            </div>

            <!--Fin de la partie listes des messages -->






            <!-- Debut de la partie administrateur et utilisateur du site -->
        <?php

        if ( $_SESSION['role'] === 'Admin') {?>

            <div class="row">
                <h3 class="text-center  text-primary mb-3">Grille des Utilisateurs </h3>
            </div>
            <div class="row">

                <p>
                    <a href="createUsers.php" class="btn btn-success">Création d'un gestionnaire.</a>
                </p>

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
                        foreach ($utilisateurs as $cle => $User) { ?>
                            <tr>

                                <td class="fw-bold"> <?= $User['Email']; ?> </td>
                                <td> <?= $User['Name']; ?> </td>
                                <td> <?= $User['Firstname']; ?> </td>
                                <td> <?= $User['Role']; ?> </td>
                                <td class="text-center">
                                    <a class="btn btn-secondary" href="visu.php?id=<?= $User['Id']; ?>">Modifier</a>
                                </td>
                                <!-- integration du boutton suppression directement sur la partie admin-->
                                <td class="text-center">
                                    <form action="functionDelete.php?<?= $User['Id']; ?>" method="get">
                                        <button class="btn btn-secondary " type="submit" value="<?= $User['Id']; ?>" name="id">Supprimer</button>
                                    </form>
                                </td>


                                <!-- fin de l integration du boutton de suppression -->

                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div> <!-- /container -->

        <?php } ?>
        <!-- Fin de la partie administrateur et utilisateur -->

        <!-- Debut de la partie creation et gestion des Realisations -->
        <div class="container">
            <div class="row">
                <h3 class="text-center  text-primary mb-3">Grille des differentes Realisations </h3>
            </div>
            <div class="row">

                <p>
                    <a href="createRealisation.php" class="btn btn-success">Création d'une Réalisation</a>
                </p>

                <table class="table table-striped table-bordered backgroungarray">
                    <thead class="text-primary">
                        <tr>

                            <th>Titre:</th>
                            <th>Detail 1:</th>
                            <th>Detail 2:</th>
                            <th>Detail 3:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($details as $cle => $Detail) { ?>
                            <tr>

                                <td class="fw-bold"> <?= $Detail['Titre']; ?>
                                    <!-- integration des boutons de gestions de MAJ et de suppression -->

                                    <!--<form action="./UpdateRealisation.php?=<?= $Detail['Id_Real']; ?>" method="get" class="mb-2">
                                        <input type="hidden" name="Id" value="<?= $Detail['Id_Real']; ?>">
                                        <button class="btn btn-secondary" type="submit">Modifier</button>
                                    </form> -->

                                    <form action="./deleteRealisation.php?=<?= $Detail['Id_Real']; ?>" method="get">
                                        <input type="hidden" name="Id" value="<?= $Detail['Id_Real']; ?>">
                                        <button class="btn btn-secondary mt-3" type="submit">Supprimer</button>
                                    </form>

                                    <!-- fin de la partie integration de Mej et de suppression -->


                                </td>
                                <td> <?= $Detail['detail1']; ?> </td>
                                <td> <?= $Detail['detail2']; ?> </td>
                                <td> <?= $Detail['detail3']; ?> </td>

                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>

            <div class="row mt-5 mb-5">
                <h3 class="text-center  text-primary mb-3">Gestion des Images </h3>
            </div>
            <div class="row">



                <table class="table table-striped table-bordered backgroungarray ">
                    <thead class="text-primary">
                        <tr class="text-center">

                            <th>Titre:</th>

                            <th>Image 1:</th>
                            <th>Image 2:</th>
                            <th>Image 3:</th>
                            <th>Image 4:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($details as $cle => $Detail) { ?>
                            <tr class="text-center">

                                <td class="fw-bold"> <?= $Detail['Titre']; ?> </td>

                                <td> <img class="image-fluid rounded-circle" width="70px" src="<?= $Detail['Image1']; ?>"></td>
                                <td> <img class="image-fluid rounded-circle" width="70px" src="<?= $Detail['Image2']; ?>"></td>
                                <td> <img class="image-fluid rounded-circle" width="70px" src="<?= $Detail['Image3']; ?>"></td>
                                <td> <img class="image-fluid rounded-circle" width="70px" src="<?= $Detail['Image4']; ?>"></td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>

        </div> <!-- /container -->






        <!-- Fin de la partie creation des Realisations -->
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php  } else {
    header ('location : ./index.php');
}