<?php 

class Enclosure extends AbstractEnclosure{
 
  public function addAnimal(Animal $animal)
  {
    if ($this->numAnimal >= 6) {
      echo "$this->numAnimal animals maximum, you cant add another one.";
    } else {
      if ($animal instanceof Tiger || $animal instanceof Bear) {
        echo 'you added an ' . $animal->getRace();
        $this->animals[] = $animal;
      }
    }
  }

 public function mantainEnclosure()
 {
  
 }
}