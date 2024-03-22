<?php

require('model/modeleUtilisateurs.php');
require('model/modeleAvis.php');

function home()
{
    $requete = getUsers();

    require('view/listUserView.php');
}

function testimonials()
{
    $requete = getTestimonials();

    require('view/liestTestimonialsView.php');
}
