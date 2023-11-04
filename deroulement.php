<?php
require_once './top.php';

?>

<body>
    <?php

    require_once './navbar.php';
    ?>
    <h1 class="h1 text-center text-primary mb-3">- Les étapes d'un projet -</h1>
    <main class="containerDeroulement">

        <div class="container2whitImage">
            <P class="bulleP">PREMIER RENDEZ-VOUS:<br>
                Nous fixerons un rendez-vous. Celui s’effectue à votre domicile. Ce rendez vous nous permettra de se rencontrer et d’échanger, puis de réaliser un état des lieux. Ensemble nous établirons un cahier des charges précis qui déterminera vos besoins, votre budget et vos envies.</P>
            <img src="./asset/interieur4.jpg" class="bullePic" alt="Illustration d'un interieur d'un appartement design et moderne">
        </div>

        <div class="containerSansImage">
            <div class="bulleP order2">DEVIS:<br>
            Je vous établirai un devis détaillé et précis de vos demandes suite à ce premier rendez vous. Les devis sont basés sur des tarifs en fonction des surfaces, des pièces à travailler, ainsi que des prestations que vous souhaitez.</div>

            <div class="bulleP order3">VALIDATION DU CAHIER DES CHARGES:<br>
                A l’acceptation du devis, nous prenons un deuxième rendez-vous. Celui s’effectue à votre domicile pour la signature et la reprise de cotations . Nous validerons également le cahier des charges de votre projet.</div>
        </div>

        <div class="container2whitImage2">
            <img src="./asset/interieur5.jpg" class="bullePic" alt="Illustration d'une cuisine spacieuse, moderne et renovée">
            <p class="bulleP">PRÉSENTATION DU PROJET:<br>
                Nous reprendrons un rendez-vous pour vous présenter votre projet d’aménagement et de décoration complet . Une vision globale de votre futur intérieur qui va vous permettre de valider vos futurs choix ( matériaux, mobiliers…).</p>
        </div>
    </main>
    <footer>
        <?php
        require_once './footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>