<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Mourad';

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

  public function SetWeapon($weapon)
  {
    $this->weapon = $weapon;
  }

    public function SetImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

};

class StartrekWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power() {
        return $this -> mentalPower;
    }

    public function __construct($id)
  {

    Warrior::__construct($id);
    $this->mentalPower = 8;
    $this->superPower = 100;
    $this->level = 1;
  }

};

class MarvelWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power() {
  return $this -> superPower;
    }

  public function __construct($id)
  {
    Warrior::__construct($id);
    $this->mentalPower = 8;
    $this->superPower = 100;
    $this->level = 1;
  }

};

class PokemonWarrior extends Warrior {

public	$mentalPower;
public	$superPower;
public	$level;

public function power() {
  return $this -> superPower;
    }

  public function __construct($id)
  {
    Warrior::__construct($id);
    $this->mentalPower = 8;
    $this->superPower = 100;
    $this->level = 1;
  }

};

class Weapon extends Warrior {

public  $id;
public  $strength;
public  $imageUrl;

   public function __construct($id, $strength)
  {
    $this->id = $id;
    $this->strength = $strength;
  }

  public function SetImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

};



