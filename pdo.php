<?php


$User= 'ndev2023_nico';
$Password = 'Bouddha83480@';


try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_coco', $User, $Password);
   
} catch (PDOException $e) {
    echo " il y a  un soucis";
}


