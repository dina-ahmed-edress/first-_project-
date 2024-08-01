<?php

session_start();
unset($_SESSION["loggeduser"]);
header('location:http://localhost/my_project/index.php');

?>