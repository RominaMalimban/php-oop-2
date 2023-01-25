<?php

// classe product:
class Product
{
    private $categoryAnimal;
    private $price;

    public function __construct($categoryAnimal, $price)
    {
        $this->setCategoryAnimal($categoryAnimal);
        $this->setPrice($price);
    }

    public function setCategoryAnimal($categoryAnimal)
    {
        $this->categoryAnimal = $categoryAnimal;
    }
    public function getCategoryAnimal()
    {
        return $this->categoryAnimal;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getHtml()
    {
        return "<h1>Categoria Animale: " . $this->categoryAnimal . "</h1>"
            . "<h3>Price: " . $this->price . "</h3>";
    }
}

// classe food:
class Food extends Product
{

    private $price;
    private $typeOfSnack;
    private $diets;

    public function __construct($typeOfSnack, $diets, $categoryAnimal, $price)
    {

        $this->setTypeOfSnack($typeOfSnack);
        $this->setDiets($diets);
        parent::__construct($categoryAnimal, $price);
    }

    public function setTypeOfSnack($typeOfSnack)
    {
        $this->typeOfSnack = $typeOfSnack;
    }
    public function getTypeOfSnack()
    {
        return $this->typeOfSnack;
    }
    public function setDiets($diets)
    {
        $this->diets = $diets;
    }
    public function getDiets()
    {
        return $this->diets;
    }

    public function getHtmlFood()
    {
        return "<h3>Tipo di cibo: " . $this->typeOfSnack . "</h3>"
            . "<h3>Tipo di dieta: " . $this->diets . "</h3>";
    }
    public function getFood()
    {
        return parent::getHtml() . $this->getHtmlFood();
    }
}

// $animal = new Product("cane", "30 euro");
// echo $animal->getHtml();

$product = new Food("croccantini", "ipoallergenica", "gatto", "20 euro");
echo $product->getFood();