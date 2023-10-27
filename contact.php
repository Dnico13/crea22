<?php
require_once './top.php';
require_once './navbar.php';
?>

<body>
<form>
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom"><br><br>
  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom"><br><br>
  <label for="email">Adresse e-mail :</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="telephone">Numéro de téléphone :</label>
  <input type="tel" id="telephone" name="telephone"><br><br>
  <input type="submit" value="Envoyer">
</form>





</body>
<footer>
    <?php
        require_once './footer.php';
    ?>
</footer>
</html>