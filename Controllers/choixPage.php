<?php
    if (isset($_GET['action'])){
        switch ($_GET['action']) {
            case "bienvenu":
                include "./Models/dataUser.php";
                include "./Views/bienvenue.php";
                break;
            case "cemoi":
                include "./Models/dataUser.php";
                include "./Views/cemoi.php";
                break;
            default:
                include "./Views/erreur404.php";
        }
    }
?>