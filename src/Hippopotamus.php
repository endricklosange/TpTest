<?php

namespace App;

class Hippopotamus {
    private $name;
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
        return "Nom de l'hippo ".$this->name." a perdu  ".$this->weight . " kg.";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of tusksSize
     */ 
    public function getTusksSize()
    {
        return $this->tusksSize;
    }

    /**
     * Set the value of tusksSize
     *
     * @return  self
     */ 
    public function setTusksSize($tusksSize)
    {
        $this->tusksSize = $tusksSize;

        return $this;
    }
}
