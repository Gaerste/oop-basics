<?php
class Mercedes
{
    //PROPERTIES
    public $type;
    public $price;
    public $horsePower;
    public $fuel;
    public $manualGearBox;
    //CONSTUCTOR
    public function __construct($type, $price, $horsePower, $fuel, $manualGearBox)
    {
        $this->type = $type;
        $this->price = $price;
        $this->horsePower =$horsePower;
        $this->fuel = $fuel;
        $this->manualGearBox = $manualGearBox;
    }
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

class Audi extends Mercedes
{
    public $hybrid;

    public function __construct($type, $price, $horsePower, $fuel, $manualGearBox, $hybrid)
    {
        parent::__construct($type, $price, $horsePower, $fuel, $manualGearBox, $hybrid);
        $this->hybrid = $hybrid;
    }

    
    public function getHybrid()
    {
        return $this->hybrid;
    }
    
    function __destruct()
    {
        echo "<br>";
        echo "- DESTROYED : " . $this->type . ", " . $this->price . ", ". $this->horsePower . ", " . $this->fuel . ", " . $this->manualGearBox . ", " . $this->hybrid;
    }
}

$mercedes = new Mercedes("Class G", 183.339, "585HP", "gasoline", "Automatic");
$audi = new Audi("Audi A4", 46.080, "341HP", "Diesel", "Automatic", "Hybrid");

echo $mercedes->getType();
echo "<br>";
echo $mercedes->showSpecs();
echo "<br>";
echo "<br>";

echo $audi->getType();
echo "<br>";
echo $audi->showSpecs();
