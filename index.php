<?php
require_once './src/Championnat.php';
require_once './src/Equipe.php';

// Créer un championnat
$ligue1 = new Championnat("Ligue 1");
echo $ligue1->getNom();

// Créer 2 équipes
// psg est une référence sur un objet de la classe Equipe
$psg = new Equipe("PSG", "Luis", "1987");
$om = new Equipe("OM", "mitroglou", "1998");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);

echo PHP_EOL;
echo $ligue1->getNombreEquipes() . "équipes";


// Afficher nom toutes les équipes de ligue1
foreach ($ligue1->getEquipes() as $equipe) {
    echo $equipe->getNom().PHP_EOL;

}