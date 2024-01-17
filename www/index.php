<?php

if (empty($_GET['page'])) {
    require "views/accueil.view.php"; // page par défaut
} else {
    switch ($_GET['page']) {
        case 'accueil':
            require "views/accueil.view.php"; // Appel de la vue Accueil
            break;
        case 'livres':
            require "views/livres.view.php"; // Appel de la vue Livres
            break;
        case 'a-propos':
            require "views/a-propos.view.php";
            break;
        case 'connexion':
            require "views/connexion.view.php";
            break;
        default:
            require "views/error.view.php"; // page d'erreur
    }
}
