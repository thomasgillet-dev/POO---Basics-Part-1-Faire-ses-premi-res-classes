<?php

class Car
{
    /**
     * @var integer
     */
    public $nbWheels = 4;
    public function start()
    {
        return "Démarrage de la voiture";
    }
    public function froward()
    {
        $this->currentSpeed = 130;

        return "Go !";
    }

    private $energyLevel = 20;

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Brake !<br>";
        }
        $sentence .= "Je suis à l'arrêt ont a eu chaud !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }

    /**
     * @var integer
     */
    public $currentSpeed;

    /**
     * @var string
     */
    public $color;

    /**
     * @var integer
     */
    public $nbSeats;

    /**
     * @var string
     */
    public $energy;

public function __construct(string $color, int $nbSeats, string $energy){
    $this->nbSeats = $nbSeats;
    $this->color = $color;
    $this->energy = $energy;
}
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function __toString()
    {
    $str = "Je viens de m'acheter une voiture " .$this->color ." qui fonctionne à l'" .$this->energy ." elle possède " .$this->nbSeats ." sièges d'un confort exeptionnel.";
    return $str;
    }

}
