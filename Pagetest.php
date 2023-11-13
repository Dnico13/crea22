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
    <main class="ContainerRealisation">
<?php
    foreach ($DetailetImages as $key => $DetailetImage) {?>

        <figure class="figure">
            <a href="#"><img src="<?= $DetailetImage['Image1']?>" class="figure-img  cssBullePicRealisation" alt="Illustration de Projet: <?= $DetailetImage['Titre']?>"></a>
            <figcaption class="figure-caption ms-5">Projet: <?= $DetailetImage['Titre']?></figcaption>
        </figure>
    <?php } ?>      

    </main>
    <footer>
        <?php
        require_once './footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html><a>