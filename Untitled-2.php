<?php
interface Gods_Mixer{
    public function getBrand();
    public function getPower();
    public function Output();
}
class Mixer implements Gods_Mixer{
    private $brand;
    private $power;
    function __construct($brand, $power){
    $this->brand = $brand;
    $this->power = $power;
}
    public function getBrand(){
    return $this->brand;
}
    public function getPower(){
    return $this->power;
}
    public function Output(){
    return "{$this->brand}" . "{$this->power}";
}
}
    $objectTwo = new Mixer("BRAYER",350);
    echo "Бренд - " . $objectTwo->getBrand() . " ";
    echo "Мощность - " . $objectTwo->getPower();