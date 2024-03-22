<?php

require('modeleUtilisateurs.php');

$requete = getUtilisateurs();

// Affichage
require('vueAccueil.php');
