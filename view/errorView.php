<?php
$title = "Erreur";

ob_start();
?>

<section class="container">
    <h1>Oups</h1>
    <p><?= $error ?></p>
</section>

<?php
$content = ob_get_clean();

require('base.php');
