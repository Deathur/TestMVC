<?php
    include_once "./Models/personnage.php";
    if (isset($_GET['action'])){
        switch ($_GET['action']) {
            case "bienvenu":
                $request = new Personnage($pdo);
                $users = $request->afficherNom();
                include "./Views/bienvenue.php";
                break;
            case "cemoi":
                $request = new Personnage($pdo);
                $users = $request->afficherNom();
                include "./Views/cemoi.php";
                break;
            default:
                include "./Views/erreur404.php";
        }
    }
?>