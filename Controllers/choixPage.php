<?php
if (isset($_GET['action'])){
    switch ($_GET['action']) {
        case "bienvenu":
            include "./Views/bienvenue.php";
            break;
        case "cemoi":
            include "./Views/cemoi.php";
            break;
        default:
            include "./Views/erreur404.php";
        }
}

?>