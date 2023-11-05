<?php
require_once './top.php';

?>

<body>
    <?php

    require_once './header.php';

    ?>

   <h1 class="h1 text-center mb-3 text-primary">- Présentation -</h1>
   <img src="./asset/chloee-piasechi.png" alt="Portrait de Chloé Piasechi, architecte d'interieur" class="align-self-center img-fluid " width="300px">
    <div class="centrale mt-3 mb-3">
        <div class="parcours">
            <div class="h3">Parcours:</div>
            <p class="esparcours">Depuis toujours, inspirée et créative, je me passionne pour l’architecture d’intérieur et la rénovation. Je me tourne directement avec évidence vers des études d’architecture d’intérieur, une démarche pour moi essentielle. J'intègre l'ITECOM, école d’art et de design, d’enseignement technique supérieur. Riche et précieux en enseignements, il me permet de côtoyer des professionnels et d'obtenir une certification professionnelle reconnu par l’État et enregistrée au RNCP (Répertoire national de la certification professionnel) dans l’architecture d’intérieur et le design d’espace niveau III – niveau 5 européen. Après 4 ans d’études je travaille dans différents cabinets d’architecture et de rénovation.</p>
        </div>
        <div class="projets">
            <div class="h3">Projets:</div>
            <p class="esparcours"> Avec l’intention de ne pas être bridée et de travailler en laissant parler toute ma créativité je crée en 2019 ma propre agence sur Saint-Raphaël. Je rencontre alors mon collaborateur avec qui je partage la même passion, les mêmes valeurs et la même importance pour le savoir-faire. De là nous décidons de former une équipe soudée, regardant dans la même direction. Depuis 2 ans je construis et compose les projets de mes clients entourés d’une équipe complète et compétente au quotidien qui me permet de mener à bien les différents projets d’aménagement, de rénovation et de réhabilitation d’appartements et maisons. Dynamique, créative, curieuse et perpétuellement à l’affut des dernières tendances, je suis à l’écoute des autres et prendra plaisir avec mon équipe à réaliser vos projets avec passion.</p>

        </div>
        <div class="valeurs mt-md-2">
            <div class="h3">Mes Valeurs:</div>
            <p class="esparcours"> Nous aspirons à travailler dans un climat de confiance et d’honnêteté. Chaque personne de notre équipe met son métier à l’œuvre pour réaliser votre projet. Les travaux se déroulent assidument avec respect tout en vous tenant informés de l’évolution et des étapes.Je place beaucoup d’importance dans la réalisation de ceux-ci. Notre lieu de vie est notre lieu de détente, où l’on se retrouve, où l’on partage, où l’on vit, pour certains il est notre cocon. Il est donc important pour moi de faire preuve de créativité pour en faire votre lieu de bien-être.</p>
        </div>

    </div>



    <div class="navig mb-2">
        <button class="decobtn"><a class="btn " href="./intervention.php">Mes Prestations</a></button>
        <button class="decobtn"><a class="btn  " href="./deroulement.php"> Les étapes projet</a></button>
        <button class="decobtn"><a class="btn  " href="./Charte.php">Mes Engeagements</a></button>
        <button class="decobtn"><a class="btn  " href="./realisation.php">Mes Realisations</a></button>
        <button class="decobtn"><a class="btn  " href="./espacePro.php">Espace Pro</a></button>
    </div>



    <footer>
        <?php
        require_once 'footer.php';
        ?>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>