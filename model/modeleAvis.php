<?php

require_once('Manager.php');

class TestimonialManager extends Manager
{
    public function getTestimonials()
    {
        $bdd = $this->connection();

        $requete = $bdd->query('SELECT * FROM testimonials');

        return $requete;
    }

    public function postTestimonials($note, $commentaire)
    {
        $bdd = $this->connection();
        $requete = $bdd->prepare('INSERT INTO testimonials(note, content) VALUES(:note, :commentaire)');
        $requete->bindParam(':note', $note);
        $requete->bindParam(':commentaire', $commentaire);
        $result = $requete->execute();

        return $result;
    }
}
