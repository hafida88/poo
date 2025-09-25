<?php


abstract class Product4
{
    private string $name;
    private string $type;
    private int $age;

 public function __construct(string $name, string $type, int $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    // Getter et Setter 
    public function getName(): string
    {
        return $this->nom;
    }

    public function setName(string $nom): void
    {
        $this->nom = $nom;
    }

    // Getter et Setter pour $prix
    public function getPrice(): float
    {
        return $this->prix;
    }

    public function setPrice(float $prix): void
    {
        $this->prix = $prix;
    }
}

// Classe Meuble qui hérite de Product4
class Meuble extends Product4
{
    private string $couleur;

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }
}

// Classe Vetement qui hérite de Product4
class Vetement extends Product4
{
    private string $taille;

    public function setTaille(string $taille): void
    {
        $this->taille = $taille;
    }

    public function getTaille(): string
    {
        return $this->taille;
    }
}



//
$meuble = new Meuble("Table", 150.0);
$meuble->setCouleur("Marron");


$vetement = new Vetement("T-shirt", 20.0);
$vetement->setTaille("L");


echo "=== Meuble ===" . PHP_EOL;
echo "Nom : " . $meuble->getNom() . PHP_EOL;
echo "Prix : " . $meuble->getPrix() . " €" . PHP_EOL;
echo "Couleur : " . $meuble->getCouleur() . PHP_EOL;

echo PHP_EOL;

echo "=== Vêtement ===" . PHP_EOL;
echo "Nom : " . $vetement->getNom() . PHP_EOL;
echo "Prix : " . $vetement->getPrix() . " €" . PHP_EOL;
echo "Taille : " . $vetement->getTaille() . PHP_EOL;

?>
