<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vive le MVC !</title>
    <link rel="stylesheet" href="public/design/default.css" />
</head>

<body>

    <header>
        <span>MVC</span>
    </header>

    <section class="container">

        <h1>Bienvenue sur mon site MVC</h1>
        <p>Voici la liste des utilisateurs :</p>

        <?php



        while ($utilisateur = $requete->fetch()) {

        ?>
            <p><b><?= $utilisateur['first_name'] ?> <?= $utilisateur['last_name'] ?></b> : <?= $utilisateur['email'] ?></p>
        <?php
        }
        ?>

    </section>

</body>

</html>