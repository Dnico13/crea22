<?php
require_once './pdo.php';

function MajUsers($pdo){

$MajUserId= $_POST['Id'];
//$MajId= intval($MajUserId);

$Majemail = $_POST['Email'];
$MajName = $_POST['Name'];
$MajFirstname = $_POST['Firstname'];
$MajRole = $_POST['Role']; 

$query  = $pdo->prepare("UPDATE User SET Email= (:email), Name= (:name), Firstname= (:firstname), Role= (:role)  WHERE Id= (:Id)");

$query-> bindParam(':Id' , $MajUserId);
$query-> bindParam(':email' , $Majemail);
$query-> bindParam(':name' , $MajName);
$query-> bindParam(':firstname' , $MajFirstname);
$query-> bindParam(':role' , $MajRole);

$query->execute();

header('location: ./InterfAdminis.php');
}

MajUsers($pdo);