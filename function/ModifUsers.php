<?php
require_once '../pdo.php';

function MajUsers($pdo){

$MajUserId= htmlspecialchars($_POST['Id']);
//$MajId= intval($MajUserId);

$Majemail = htmlspecialchars($_POST['Email']);
$MajName = htmlspecialchars($_POST['Name']);
$MajFirstname = htmlspecialchars($_POST['Firstname']);
$MajRole = htmlspecialchars($_POST['Role']); 

$query  = $pdo->prepare("UPDATE User SET Email= (:email), Name= (:name), Firstname= (:firstname), Role= (:role)  WHERE Id= (:Id)");

$query-> bindParam(':Id' , $MajUserId);
$query-> bindParam(':email' , $Majemail);
$query-> bindParam(':name' , $MajName);
$query-> bindParam(':firstname' , $MajFirstname);
$query-> bindParam(':role' , $MajRole);

$query->execute();

header('location: ../InterfAdminis.php');
}

MajUsers($pdo);