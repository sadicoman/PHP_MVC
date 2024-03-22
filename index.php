<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vive le MVC !</title>
        <link rel="stylesheet" href="design/default.css" />
    </head>

    <body>

        <header>
            <span>MVC</span>
        </header>

        <section class="container">
        
            <h1>Bienvenue sur mon site MVC</h1>
            <p>Voici la liste des utilisateurs :</p>

            <?php

                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
                }
                catch(Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
                
                $requete = $bdd->query('SELECT * FROM utilisateurs');
                
                while($utilisateur = $requete->fetch()) {
            
            ?>
                <p><b><?= $utilisateur['prenom'] ?> <?= $utilisateur['nom'] ?></b> : <?= $utilisateur['email'] ?></p>
            <?php
                }
            ?>

        </section>

    </body>
</html>