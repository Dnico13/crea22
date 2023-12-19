<!--<div class="dropdown me-5 me-s-n1  mt-4 mt-s-n1 " title="Detail des Rubriques">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Rubriques
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="./intervention.php">-1- Mes Prestations</a></li>
        <li><a class="dropdown-item" href="./deroulement.php">-2- Les Etapes Projet</a></li>
        <li><a class="dropdown-item" href="./Charte.php">-3- Mes Engagements</a></li>
        <li><a class="dropdown-item" href="./espacePro.php">-4- Espace Pro</a></li>
        <li><a class="dropdown-item" href="./realisation.php">-5- Mes Réalisations</a></li>
        <li><a class="dropdown-item" href="./contact.php">-6- Contactez-moi</a></li>
        <li><a class="dropdown-item  disabled" href="./espaceClient.php">-7- Log In</a></li>
    </ul>
</div>-->



<!-- boucle for each pour affichage dynamique du menu -->
<?php
$menu =[
        
        ["adresse"=>"./intervention.php",
        "titre"=>"-1- Mes Prestations"],
        
        
        ["adresse"=>"./deroulement.php",
        "titre"=>"-2- Les Etapes Projet"],
        
        
        ["adresse"=>"./Charte.php",
        "titre"=>"-3- Mes Engagements"],
        
        
        ["adresse"=>"./espacePro.php",
        "titre"=>"-4- Espace Pro"],
        
        
         ["adresse"=>"./realisation.php",
         "titre"=>"-5- Mes Réalisations"],
        
        
         ["adresse"=>"./contact.php",
         "titre"=>"-6- Contactez-moi"],
        
        
         ["adresse"=>"./espaceClient.php",
         "titre"=>"-7- Log In"
         ]
    ];
    
?>
    <div class="dropdown me-5 me-s-n1  mt-4 mt-s-n1 " title="Detail des Rubriques">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Rubriques
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php
            foreach ($menu as $detail) {?>

        <li><a class="dropdown-item <?php if ($_SERVER['PHP_SELF']== $detail['adresse'] ) { echo "disabled";}?> " href="<?=$detail['adresse'];?>"><?=$detail['titre'];?></a></li>
        <?php }?>
    </ul>
</div>
    



<!-- fin de la boucle foreach pour affichage dynamique -->