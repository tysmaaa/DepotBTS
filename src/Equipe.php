<?php

class Equipe
{
    private string $nom;
    private int $nbLikes;
    private string $entraineur;
    private string $anneeCreation;

    /**
     * @param string $nom
     * @param string $entraineur
     * @param string $anneeCreation
     */
    public function __construct(string $nom, string $entraineur, string $anneeCreation)
    {
        $this->nom = $nom;
        $this->entraineur = $entraineur;
        $this->anneeCreation = $anneeCreation;
    }

    public function incrementerNbLikes() : void {
        $this->nbLikes++;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getNbLikes(): int
    {
        return $this->nbLikes;
    }

    /**
     * @return string
     */
    public function getEntraineur(): string
    {
        return $this->entraineur;
    }

    /**
     * @return string
     */
    public function getAnneeCreation(): string
    {
        return $this->anneeCreation;
    }

    }