<?php
require_once './top.php';
require_once './pdo.php';
$utilisateurs = getUtilisateur($pdo);
$details = getDetailetImage($pdo);
?>

<body>
    <header>

        <h1 class="h1 text-center text-primary">
            Interface d'administration
        </h1>

    </header>
    <main>




    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>