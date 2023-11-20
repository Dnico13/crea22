<?php
require_once './top.php';
require_once './pdo.php';
$utilisateur= getUtilisateur();
var_dump($utilisateur);
?>

<body>
    <header>

    </header>
    <h1 class="h1">
        Interface d administration
    </h1>
    <main>
        
    <!-- Debut du test-->
    <div class="container">
<div class="row">
<h3>Ma grille d administration </h3>
</div>
<div class="row">
<table class="table table-striped table-bordered">
<thead>
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
foreach ($Utilisateurs as $cle => $Utilisateur) {?>
<tr>
<td> <?=$User['Id'];?> </td>
<td> <?=$User['email'];?> </td>
<td> <?=$User['Name'];?> </td>
<td> <?=$User['Firstname'];?> </td>
<td> <?=$User['Role'];?> </td>
</tr>
<?php } ?>


</tbody>
</table>
</div>
</div> <!-- /container --> 





    <!-- Fin du test -->
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>