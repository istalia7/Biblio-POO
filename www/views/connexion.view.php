<?php

require_once "UserManager.class.php";

$userManager = new UserManager;
$userManager->chargementUser();
$usersEnCours = $userManager->getusers();
?>

<?php ob_start() ?>

<form action="accueil" method="post">
    <div class="form-group">
        <label class="form-label mt-4" for="identifiant">Nom d'utlisateur</label>
        <input class="form-control" type="text" name="identifiant" placeholder="Nom d'utilisateur">
        <label class="form-label mt-4" for="password">Mot de passe</label>
        <input class="form-control" type="password" name="password" placeholder="Mot de passe">
        <input type="submit" class="btn btn-success mt-3">
    </div>
</form>

<?php
$titre = "Connecter vous à la base de données";
$content = ob_get_clean();
require_once "template.view.php";
