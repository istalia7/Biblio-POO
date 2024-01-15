<!-- buffer démarré -->
<?php ob_start() ?>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, quam! Harum, sequi voluptate voluptas minus ducimus earum illo error molestiae soluta, unde, a tenetur nisi optio totam accusamus consequuntur provident.</p>

<?php
$titre = "Bibliothèque d'Alexis";
// buffer restitué
$content = ob_get_clean();
require_once "template.php";
