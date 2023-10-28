<?php
require_once './top.php';
require_once './navbar.php';
?>



<body class="text-center">
    
<main class="form-signin">
  <form>
    <img class="mb-4" src="./asset/chloee-piasechinb.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Veuillez rentrer vos identifiants ici.</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Votre Identifiant</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe.</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Identification</button>
    <p class="mt-5 mb-3 text-muted">@ Créa22 2024</p>
  </form>
</main>
</body>




</body>
<footer>
    <?php
        require_once './footer.php';
    ?>
</footer>
</html>