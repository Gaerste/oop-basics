<?php
class Mercedes
{
    //PROPERTIES
    public $type;
    public $price;
    public $horsePower;
    public $fuel;
    public $manualGearBox;

    //METHODS
    public function showSpecs()
    {
        return "Mercedez " . $this->type . " with a power of " . $this->horsePower . " of fuel " . $this->fuel . " with a " . $this->manualGearBox . " gearbox";
    }
    //GETTERS
    public function getPrice()
    {
        return "Price: " . $this->price . "$";
    }

    public function getType()
    {
        return $this->type;
    }
    //SETTERS
    public function setPrice($price)
    {
        $this->price = $price;
        return "New Price: " . $this->price . "$";
    }
}

//MERCEDES TYPE
$classA = new Mercedes();

$classA->type = "Class A 200D";
$classA->price = 35.801;
$classA->horsePower = "150HP";
$classA->fuel = "diesel";
$classA->manualGearBox = "automatic";

echo $classA->showSpecs();
echo "<br>";
echo $classA->getPrice();
echo "<br>";
echo $classA->setPrice(30.399);


