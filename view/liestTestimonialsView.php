<?php
$title = "Témoignages";

ob_start();
?>

<section class="container">

    <h1>Avis</h1>
    <?php if (isset($_SESSION['message_success'])) : ?>
        <div class="alert alert-success">
            <?= $_SESSION['message_success']; ?>
        </div>
        <?php unset($_SESSION['message_success']); ?>
    <?php endif; ?>
    <form method="post" action="index.php?page=avis">
        <ul>
            <li>
                <label for="note">Note /5 :</label>
                <input type="number" id="note" name="note" min="1" max="5" required>
            </li>
            <li>
                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire" name="commentaire" required></textarea>
            </li>
            <li>
                <input type="submit" value="Ajouter votre avis">
            </li>
        </ul>
    </form>


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
