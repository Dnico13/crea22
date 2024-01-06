<?php

unset($_SESSION['role']);
session_destroy();
setcookie("crea22", $_SESSION['role'], time()  - 3600, "/");
header('location: ../espaceClient.php');
exit();
