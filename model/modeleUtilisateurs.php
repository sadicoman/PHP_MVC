<?php
// Traitement - Récupération des donnees
function getUsers()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $bdd->query('SELECT * FROM users');

    return $requete;
}
