<?php
require_once './top.php';
require_once './pdo.php';
$identification = $_GET['id'];
require_once './function.php';
$readUser = readUser($pdo);

//<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
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
          <a class="btn btn-secondary">Modifier</a>
          <a class="btn btn-secondary">Supprimer</a>
        </div>

      </div>
    </div> <!-- /container -->
    <!-- Fin de la partie administrateur et utilisateur -->




  </main>
  <footer>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>