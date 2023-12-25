<?php


$User= 'ndev2023_nico';
$Password = 'Bouddha83480@';

// connexion a la BDD

try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_coco', $User, $Password);
   
} catch (PDOException $e) {
    echo " il y a  un soucis de connexion a la bdd";
}



// requete d affichage des realisations
// creation de fonction 

function getDetailRealisation($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Realisation ORDER BY id DESC");

    $query->execute();
    $DetailRealisation = $query->fetchAll(PDO::FETCH_ASSOC);
    return $DetailRealisation;
}

function getImage($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Picture ORDER BY id DESC");

    $query->execute();
    $image = $query->fetchAll(PDO::FETCH_ASSOC);
    return $image;
}

function getDetailetImage($pdo)
{
    try {
    $query  = $pdo->prepare("SELECT * FROM Realisation  INNER JOIN Picture ON Realisation.id = Id_Real");

    $query->execute();
    $DetailetImage = $query->fetchAll(PDO::FETCH_ASSOC);
    return $DetailetImage;
}
catch (Exception $e){
 echo 'erreur sur les demande de detail des realisations';
}
}

function getUtilisateur($pdo)
{
    try {
        $query  = $pdo->prepare("SELECT * FROM User");
    
        $query->execute();
        $Utilisateur = $query->fetchAll(PDO::FETCH_ASSOC);
        return $Utilisateur;
    }
    catch (Exception $e){
     echo 'Erreur sur les demandes user';
    }
}






