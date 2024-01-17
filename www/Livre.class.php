<?php

class Livre
{
    private int $idLivre;
    private string $titre;
    private string $image;
    private int $nbrPages;
    // public static array $livres; // tableau de livres

    function __construct(int $idLivre, string $titre, string $image, int $nbrPages)
    {
        $this->idLivre = $idLivre;
        $this->titre = $titre;
        $this->image = $image;
        $this->nbrPages = $nbrPages;
        // self::$livres[] = $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of idLivre
     *
     * @return int
     */
    public function getIdLivre(): int
    {
        return $this->idLivre;
    }

    /**
     * Set the value of idLivre
     *
     * @param int $idLivre
     *
     * @return self
     */
    public function setIdLivre(int $idLivre): self
    {
        $this->idLivre = $idLivre;

        return $this;
    }

    /**
     * Get the value of nbrPages
     *
     * @return int
     */
    public function getNbrPages(): int
    {
        return $this->nbrPages;
    }

    /**
     * Set the value of nbrPages
     *
     * @param int $nbrPages
     *
     * @return self
     */
    public function setNbrPages(int $nbrPages): self
    {
        $this->nbrPages = $nbrPages;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
