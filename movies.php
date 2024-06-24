<?php
class movie {
    public $nome;
    public $uscita;
    public $durata;
}

// $spiderman = new movie();
// $ironman = new movie();
// $ghost = new movie();
// $topgun = new movie();

// $spiderman->nome = "Spiderman";
// $spiderman -> uscita = "2003";
// $spiderman -> durata = "120 min";

// $ironman->nome = "Ironman";
// $ironman -> uscita = "2005";
// $ironman -> durata = "122 min";

$movies = [
    new movie (
        "spiderman"
    ),
    new movie (
        "ironman"
    ),
    new movie (
        "topgun"
    ),
];