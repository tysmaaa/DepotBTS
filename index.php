<?php

require "./vendor/autoload.php";

use App\dossier1\Personne;
use App\Equipe;
use App\Championnat;

// Créer un championnat
$ligue1 = new App\Championnat("Ligue 1");
echo $ligue1->getNom();

// Créer 2 équipes
// psg est une référence sur un objet de la classe Equipe
$psg = new App\Equipe("PSG", "Luis", "1987");
$om = new App\Equipe("OM", "mitroglou", "1998");
$sochaux = new App\Equipe("Sochaux", "toto", "1952");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);

echo PHP_EOL;
echo $ligue1->getNombreEquipes() . "équipes";


// Afficher nom toutes les équipes de ligue1
foreach ($ligue1->getEquipes() as $equipe) {
    echo $equipe->getNom().PHP_EOL;

}

// Créer une personne
$personne = new Personne("maya");
echo $personne->getNom();

dump($ligue1);