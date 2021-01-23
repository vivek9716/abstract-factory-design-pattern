<?php

class Cappuccino extends Product {
    
    public function __construct($milk, $sugar, $coffee) {
        $this->setMilk($milk);
        $this->setSugar($sugar);
        $this->setCoffee($coffee);
    }

    public function make() {
        echo "Your Cappuccino coffee is prepared with : milk -> $this->milk, sugar -> $this->sugar, coffee -> $this->coffee \n";
    }

    private function setMilk($milk) {
        $this->milk = $milk;
    }

    private function setSugar($sugar) {
        $this->sugar = $sugar;
    }

    private function setCoffee($coffee) {
        $this->coffee = $coffee;
    }

}