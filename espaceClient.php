<?php
session_start();
require_once './pdo.php';
require_once './log/login.php';
require_once './template/top.php';

?>



<body class="text-center">
  <?php

  require_once './template/navbar.php';
  ?>

  <main class="form-signin mb-3">
    <form class="form" method="post">
      <img class="mb-4 rounded-circle" src="./asset/chloee-piasechi.png" alt="Photo de portrait de Chloé Piasechi" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Veuillez vous identifiez ci-dessous</h1>

      <div class="form-floating w-75 mx-auto">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="Email">
        <label for="floatingInput">Votre Identifiant</label>
      </div>
      <div class="form-floating mt-1 w-75 mx-auto">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Password">
        <label for="floatingPassword">Mot de passe.</label>
      </div>


      <button class="w-25 btn btn-lg btn-primary mt-3" type="submit" name="submit">Identification</button>
      <p class="mt-5 mb-3 text-muted">@ Créa22 2024</p>
    </form>
  </main>

  <footer>
    <?php
    require_once './template/footer.php';
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>