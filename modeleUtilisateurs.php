<?php
// Traitement - Récupération des donnees
function getUtilisateurs()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $bdd->query('SELECT * FROM utilisateurs');

    return $requete;
}
