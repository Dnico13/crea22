<?php

unset($_SESSION['role']);
session_destroy();

header('location: ../espaceClient.php');
exit();
