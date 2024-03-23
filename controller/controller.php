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
