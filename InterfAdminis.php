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

?>

<body>
  <header>

    <h1 class="h1 text-center text-primary">
      Interface d'administration
    </h1>

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

                <td> <?= $readMessage['Nom']; ?> </td>
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

                <td> <?= $User['Email']; ?> </td>
                <td> <?= $User['Name']; ?> </td>
                <td> <?= $User['Firstname']; ?> </td>
                <td> <?= $User['Role']; ?> </td>
                <td class="text-center">
                  <a class="btn btn-secondary" href="visu.php?id=<?= $User['Id']; ?>">Mettre à Jour</a>
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

                <td> <?= $Detail['Titre']; ?> </td>
                <td> <?= $Detail['detail1']; ?> </td>
                <td> <?= $Detail['detail2']; ?> </td>
                <td> <?= $Detail['detail3']; ?> </td>

              </tr>
            <?php } ?>


          </tbody>
        </table>
      </div>

      <div class="row">
        <h3 class="text-center  text-primary mb-3">Gestion des Images </h3>
      </div>
      <div class="row">

        <p>
          <a href="createImage.php" class="btn btn-success">Création d'une galerie d'Image.</a>
        </p>

        <table class="table table-striped table-bordered backgroungarray ">
          <thead class="text-primary">
            <tr>

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
              <tr>

                <td> <?= $Detail['Titre']; ?> </td>

                <td> <?= $Detail['Image1']; ?> </td>
                <td> <?= $Detail['Image2']; ?> </td>
                <td> <?= $Detail['Image3']; ?> </td>
                <td> <?= $Detail['Image4']; ?> </td>
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