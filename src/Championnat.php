<?php

class Championnat {

    private string $nom;
    // Association ONE-TO-MANY avec la classe Equipe
    // Chaque élément du tableau est un objet (une instance) de la classe equipe
    private array $equipes;

    /**
     * @var Equipe[]
     */

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->equipes = [];
    }

    public function ajouterEquipe(Equipe $equipe) : void {
        $this->equipes[] = $equipe;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return array
     */
    public function getEquipes(): array
    {
        return $this->equipes;
    }

    public function getNombreEquipes() : int {
        return count($this->equipes);
    }

}