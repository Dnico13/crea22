<?php
require_once './top.php';
require_once './pdo.php';
require_once './functionRead.php';
$readUser = readUser($pdo);
?>

<body>
  <header>

    <h1 class="h1 text-center text-primary">
      Interface d'administration
    </h1>

  </header>

  <main>

    <!-- Debut de la partie lecture utilisateur du site -->
    <div class="container">
      <div class="row">
        <h3 class="text-center  text-primary  mb-5 ">Grille des Utilisateurs </h3>
      </div>
      <div class="row">
        <table class="table table-striped table-bordered backgroungarray">
          <thead class="text-primary">
            <tr>
              <th>Id:</th>
              <th>Email:</th>
              <th>Nom:</th>
              <th>Prenom:</th>
              <th>Role:</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($readUser as $clefs => $Users) { ?>

              <tr>
                <td> <?= $Users['Id']; ?> </td>
                <td> <?= $Users['Email']; ?> </td>
                <td> <?= $Users['Name']; ?> </td>
                <td> <?= $Users['Firstname']; ?> </td>
                <td> <?= $Users['Role']; ?> </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <div class="text-center">

          <!-- Button trigger modal modification -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
            Modification
          </button>

          <!-- Button trigger modal suppression -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Suppression
          </button>
        </div>
      </div>
      <!-- Fin de la partie  lecture utilisateur -->

      <!-- code de la modale  suppression -->

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Suppression d'un utilisateur</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- inserer le code de la suppression-->
              Etes vous sur de vouloir supprimer cette utilisateur?



              <!-- fin de l insertion du code de la suppression-->
            </div>
            <div class="modal-footer">
              <!-- integration du tableau d envoi-->
              <form action="functionDelete.php?<?= $Users['Id']; ?>" method="get" >
                <button class="btn btn-success" type="submit" value="<?= $Users['Id']; ?>" name="id">Valider</button>
              </form>
              <!-- fin du tableau d envoie-->
              
              <button type="button" class="btn btn-danger">Retour</button>
            </div>
          </div>
        </div>
      </div>

      <!-- fin de la modale suppression -->

      <!-- code de la modale  modification -->

      <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- insertion du code la modification-->


              Modification
              <!-- fin de l insertion du code de la modification-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Valider</button>
              <button type="button" class="btn btn-danger">Retour</button>
            </div>
          </div>
        </div>
      </div>

      <!-- fin de la modale modification -->


  </main>
  <footer>

  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>