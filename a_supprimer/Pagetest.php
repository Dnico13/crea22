<?php
require_once './top.php';
require_once './pdo.php';

$DetailetImages = getDetailetImage($pdo);

?>

<body>
    <?php

    require_once './navbar.php';
    ?>
    <h1 class="h1 text-center text-primary mb-3">- Mes Réalisations -</h1>
    <main class="">
      <!-- debut du test -->
    <div class="container">
<div class="row">
<h3>Ma grille CRUD-PHP </h3>
</div>
<div class="row">
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Nom</th>
    <th>Email-Adresse</th>
    <th>mobile</th>
  </tr>
</thead>
<tbody>
<?php 
include 'database.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM customers ORDER BY id DESC';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['name'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['mobile'] . '</td>';
echo '</tr>';
}
Database::disconnect();
?>
</tbody>
</table>
</div>
</div> <!-- /container -->

    </main>
    <footer>
        <?php
        require_once './footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html><a>