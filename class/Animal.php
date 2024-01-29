<?php
abstract class Animal {
  protected int $age;

  protected int $weight;

  protected int $height;

  protected string $race;

  protected bool $sick;

  protected bool $fatigue;

  protected bool $hunger;

  abstract public function yell();

  abstract public function move();


  


  public function __toString() // it turns an object to a string.
  {
    
  }

  public function animalInfo () { // or possibility to use this instead of the magic method.
    return [ 
      'weight' => $this->weight,
    ];
  }



  public function getAge()
  {
    return $this->age;
  }

  
  public function setAge($age)
  {
    $this->age = $age;

    return $this;
  }

  
  public function getWeight()
  {
    return $this->weight;
  }

   
  public function setWeight($weight)
  {
    $this->weight = $weight;

    return $this;
  }

   
  public function getHeight()
  {
    return $this->height;
  }

 
  public function setHeight($height)
  {
    $this->height = $height;

    return $this;
  }

  public function getRace()
  {
    return $this->race;
  }

 
  public function setRace($race)
  {
    $this->race = $race;

    return $this;
  }

  
}