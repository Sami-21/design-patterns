<?php

/**
 * @property string|null $helmet
 * @property string|null $torsoArmor
 * @property string|null $armsCover
 * @property string|null $pants
 * @property string|null $primaryWeapon
 * @property string|null $secondaryWeapon
 * @property string|null $meleeWeapon
 */
interface ICharacter {}

class Character implements ICharacter
{
  public string|null $helmet = null;
  public string|null $torsoArmor = null;
  public string|null $armsCover = null;
  public string|null $pants = null;
  public string|null $primaryWeapon = null;
  public string|null $secondaryWeapon = null;
  public string|null $meleeWeapon = null;

  public function __construct() {}
}

interface ICharacterBuilder
{
  public function addHelmet(string $helmet): self;
  public function addTorsoArmor(string $armor): self;
  public function addArmsCover(string $armsCover): self;
  public function addPants(string $pants): self;
  public function addPrimaryWeapon(string $weapon): self;
  public function addSecondaryWeapon(string $weapon): self;
  public function addMeleeWeapon(string $weapon): self;
  public function getCharacter(): Character;
}

class CharacterBuilder implements ICharacterBuilder
{
  private Character $character;

  public function __construct()
  {
    $this->reset();
  }

  public function reset()
  {
    $this->character = new Character();
  }

  public function addHelmet(string $helmet): self
  {
    $this->character->helmet = $helmet;
    return $this;
  }

  public function addTorsoArmor(string $armor): self
  {
    $this->character->torsoArmor = $armor;
    return $this;
  }

  public function addArmsCover(string $armsCover): self
  {
    $this->character->armsCover = $armsCover;
    return $this;
  }

  public function addPants(string $pants): self
  {
    $this->character->pants = $pants;
    return $this;
  }

  public function addPrimaryWeapon(string $weapon): self
  {
    $this->character->primaryWeapon = $weapon;
    return $this;
  }

  public function addSecondaryWeapon(string $weapon): self
  {
    $this->character->secondaryWeapon = $weapon;
    return $this;
  }

  public function addMeleeWeapon(string $weapon): self
  {
    $this->character->meleeWeapon = $weapon;
    return $this;
  }

  public function getCharacter(): Character
  {
    $result = $this->character;
    $this->reset();
    return $result;
  }
}

class Director
{
  private CharacterBuilder $characterBuilder;

  public function setCharacterBuilder(CharacterBuilder $characterBuilder)
  {
    $this->characterBuilder = $characterBuilder;
  }

  public function buildStarterCharacter()
  {
    $this->characterBuilder
      ->addHelmet("starter")
      ->addTorsoArmor("starter")
      ->addArmsCover("starter")
      ->addPants("starter");
  }

  public function buildSniperCharacter()
  {
    $this->characterBuilder
      ->addHelmet("ghillie head cover")
      ->addTorsoArmor("ghillie torso cover")
      ->addArmsCover("ghillie arms cover")
      ->addPants("ghillie pants")
      ->addPrimaryWeapon("Bolt sniper rifle")
      ->addSecondaryWeapon("pistol")
      ->addMeleeWeapon("knife");
  }
}

// Client code
$director = new Director();
$builder = new CharacterBuilder();
$director->setCharacterBuilder($builder);
$director->buildStarterCharacter();
echo ($builder->getCharacter());

$director->buildSniperCharacter();
echo ($builder->getCharacter());
