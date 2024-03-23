<?php

require_once('model/modeleUtilisateurs.php');
require_once('model/modeleAvis.php');

function home()
{
    $userManager = new UserManager();
    $requete = $userManager->getUsers();

    require('view/listUserView.php');
}

function testimonials()
{
    $testimonialManager = new TestimonialManager();
    $requete = $testimonialManager->getTestimonials();

    require('view/liestTestimonialsView.php');
}

function addTestimonials($note, $commentaire)
{
    // Validation de la note
    if ($note < 1 || $note > 5) {
        throw new Exception("La note doit être entre 1 et 5.");
    }

    $testimonialManager = new TestimonialManager();
    $result = $testimonialManager->postTestimonials($note, $commentaire);

    if ($result === false) {
        throw new Exception("Imposible d'ajouter votre avis pour le moment.");
    } else {
        // Stocker le message de succès dans une session
        $_SESSION['message_success'] = "Votre avis a bien été ajouté !";
        header('Location: index.php?page=avis&status=success');
        exit();
    }
}
