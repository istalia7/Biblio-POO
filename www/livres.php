<?php

require_once "Livre.class.php";
$livre1 = new Livre(1, "Apprendre le CSS", "apprendre-css.png", 200, "Livre pour apprendre le css");
$livre2 = new Livre(2, "Apprendre le Java", "apprendre-java.png", 700, "Livre pour apprendre le Java");
$livre3 = new Livre(3, "Apprendre Docker", "apprendre-docker.png", 400, "Livre pour apprendre Docker");
$livre4 = new Livre(4, "Apprendre le PHP", "apprendre-php.png", 300, "Livre pour apprendre PHP");
$livre5 = new Livre(4, "Apprendre le Javascript", "apprendre-js.png", 300, "Livre pour apprendre le Javascript");

require_once "LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->ajouterLivre($livre1);
$livreManager->ajouterLivre($livre2);
$livreManager->ajouterLivre($livre3);
$livreManager->ajouterLivre($livre4);
$livreManager->ajouterLivre($livre5);
// $livres = [$livre1, $livre2, $livre3, $livre4, $livre5];

?>

<?php ob_start() ?>

<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $livresEnCours = $livreManager->getLivres();
    foreach ($livresEnCours as $livre) : ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?= $livre->getImage(); ?>" height="60px" alt="<?= $livre->getImageAlt(); ?>"></td>
            <td class="align-middle"><?= $livre->getTitre(); ?></td>
            <td class="align-middle"><?= $livre->getNbrPages(); ?></td>
            <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php endforeach ?>
</table>
<a href="#" class="btn btn-success d-block">Ajouter</a>

<?php
$titre = "Livres d'Alexis";
$content = ob_get_clean();
require_once "template.php";
