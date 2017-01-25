<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'azertyuio';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {

public	$id;
public	$name;
public	$speed;
public	$life;
public	$shield;
public	$imageUrl;
public	$weapon;

 public function __construct($id)
  {
  	$this->id = $id;
    $this->speed = 30;
    $this->life = 100;
    $this->shield = 20;
  }



};

class StartrekWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power()
  {
    echo $this->$mentalPower;
    echo $this->$superPower;
    echo $this->$level;
  }

    public function __construct()
  {
   
  }

};

class MarvelWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power()
  {
    echo $this->$mentalPower;
    echo $this->$superPower;
    echo $this->$level;
  }

  public function __construct()
  {
   
  }

};

class PokemonWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power()
  {
    echo $this->$mentalPower;
    echo $this->$superPower;
    echo $this->$level;
  }

  public function __construct()
  {
   
  }

};



