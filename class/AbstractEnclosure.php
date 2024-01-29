<?php

abstract class AbstractEnclosure
{
  protected string $name;

  protected string $cleanliness;

  protected int $numAnimal;

  protected array $animals = [];

  public function showEnclosureInfo()
  {
    return [
      'name' => $this->name,
      'cleanliness' => $this->cleanliness,
      'numAnimal' => $this->numAnimal,
    ];
  }

  public function showAnimalsInfos(array $animals)
  {
    foreach ($animals as $animal) {
      $animal->animalInfo();
    }
  }

  abstract public function addAnimal(Animal $animal);

  public function removeAnimal(Animal $animal)
  {
    if (count($this->animals) >= 1) {
      array_splice($this->animals, -1);
      $this->numAnimal = count($this->animals);
    } else {
      echo "you cant remove an animal, there isnt any in the enclosure.";
    }
  }


  abstract public function mantainEnclosure();


}
