<?php
$title = "Témoignages";

ob_start();
?>

<section class="container">

    <h1>Avis</h1>
    <p>Voici la liste des avis :</p>

    <?php



    while ($avis = $requete->fetch()) {

    ?>
        <p>
            <b><?= $avis['note'] ?> /5 </b>
            <?= $avis['content'] ?>
        </p>
    <?php
    }
    ?>

</section>

<?php
$content = ob_get_clean();

require('base.php');
