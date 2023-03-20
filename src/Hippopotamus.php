<?php

namespace App;

class Hippopotamus {
    public $name;
    private $weight;
    private $tusksSize;

    public function __construct($name, $weight, $tusksSize) {
        $this->name = $name;
        $this->weight = $weight;
        $this->tusksSize = $tusksSize;
    }

    public function swim() {
        $this->weight -= 300;
    }

    public function eat() {
        $this->weight += 1;
    }

    public function fight(Hippopotamus $opponent) {
        if ($this->tusksSize > $opponent->tusksSize) {
            return $this;
        } else {
            return $opponent;
        }
    }

    public function __toString() {
        return "Nom de l'hippo ".$this->name." poids ".$this->weight . $this->tusksSize." cm.";
    }
}
