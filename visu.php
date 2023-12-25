<?php
require_once './template/top.php';
require_once './pdo.php';
require_once './function/functionRead.php';
$readUser = readUser($pdo);

?>

<body>
  <header>

    <h1 class="h1 text-center text-primary">
      Interface d'administration
    </h1>

  </header>

  <main>

    <!-- Debut de la partie visuel utilisateur du site -->
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

              <form action="./function/ModifUsers.php" method="POST">
                <tr>
                  <td>
                    <?= $Users['Id']; ?>
                    <input type="hidden" name="Id" value="<?= $Users['Id']; ?>">
                  </td>

                  <td>
                    <input placeholder="<?= $Users['Email']; ?>" name="Email" type="email"  required>
                  </td>
                  <td>
                    <input placeholder="<?= $Users['Name']; ?>" name="Name" type="text" required>
                  </td>
                  <td>
                    <input placeholder="<?= $Users['Firstname']; ?>" name="Firstname"  type="text" required>
                  </td>
                  <td>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="Role" id="Role" placeholder="<?= $Users['Role']; ?>">
                      <option selected class="active">Choisir son Role</option>
                      <option value="Admin">Administrateur</option>
                      <option value="Employe">Employé</option>
                    </select>
                  </td>
                  <td> <button type="submit" class="btn btn-secondary  text-center"> Modifier</button></td>
                </tr>

              </form>
            <?php } ?>
          </tbody>
        </table>

        <!-- fin detail visuel utilisateur -->

  </main>
  <footer>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>