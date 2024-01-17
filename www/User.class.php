<?php
class User
{
    private int $id;
    private string $identifiant;
    private string $password;
    private bool $isValide;
    // public static array $livres; //tableau de livres

    public function __construct(int $id, string $identifiant, string $password, bool $isValide)
    {
        $this->id = $id;
        $this->identifiant = $identifiant;
        $this->password = $password;
        $this->isValide = $isValide;
        // self::$livres[]=$this;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getidentifiant(): string
    {
        return $this->identifiant;
    }
    public function setidentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;
        return $this;
    }
    public function getpassword(): string
    {
        return $this->password;
    }
    public function setpassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
    public function getisValide(): bool
    {
        return $this->isValide;
    }
    public function setisValide(bool $isValide): self
    {
        $this->isValide = $isValide;
        return $this;
    }
}
