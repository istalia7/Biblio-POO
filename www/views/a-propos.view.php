<? ob_start() ?>

<?php
$titre = "Livres d'Alexis";
$content = ob_get_clean();
require_once "template.view.php";
