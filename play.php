<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo 'Hello';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}

$myShip = new Ship();
$myShip->name = "Black Pearl";
$myShip->weaponPower = 10;

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship name : '.$someShip->getName();
    echo '<hr>';
    $someShip->sayHello();
    echo '<hr>';
    echo 'Ship description : '.$someShip->getNameAndSpecs(false);
    echo '<hr>';
    echo 'Ship description : '.$someShip->getNameAndSpecs(true);
}
printShipSummary($myShip);

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

echo '<hr>';
printShipSummary($otherShip);

echo '<hr>';
if($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.' has more strength';
} else {
    echo $myShip->name.' has more strength';
}
