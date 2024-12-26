interface ICharacter {
  helmet: string | null;
  torsoArmor: string | null;
  armsCover: string | null;
  pants: string | null;
  primaryWeapon: string | null;
  secondaryWeapon: string | null;
  meleeWeapon: string | null;
}

class Character implements ICharacter {
  helmet: string | null = null;
  torsoArmor: string | null = null;
  armsCover: string | null = null;
  pants: string | null = null;
  primaryWeapon: string | null = null;
  secondaryWeapon: string | null = null;
  meleeWeapon: string | null = null;

  constructor() {}
}

interface ICharacterBuilder {
  addHelmet(helmet: string): this;
  addTorsoArmor(armor: string): this;
  addArmsCover(armsCover: string): this;
  addPants(pants: string): this;
  addPrimaryWeapon(weapon: string): this;
  addSecondaryWeapon(weapon: string): this;
  addMeleeWeapon(weapon: string): this;
  getCharacter(): Character;
}

class CharacterBuilder implements ICharacterBuilder {
  private character: Character;

  constructor() {
    this.reset();
  }

  reset() {
    this.character = new Character();
  }

  addHelmet(helmet: string): this {
    this.character.helmet = helmet;
    return this;
  }

  addTorsoArmor(armor: string): this {
    this.character.torsoArmor = armor;
    return this;
  }

  addArmsCover(armsCover: string): this {
    this.character.armsCover = armsCover;
    return this;
  }

  addPants(pants: string): this {
    this.character.pants = pants;
    return this;
  }

  addPrimaryWeapon(weapon: string): this {
    this.character.primaryWeapon = weapon;
    return this;
  }

  addSecondaryWeapon(weapon: string): this {
    this.character.secondaryWeapon = weapon;
    return this;
  }

  addMeleeWeapon(weapon: string): this {
    this.character.meleeWeapon = weapon;
    return this;
  }

  getCharacter(): Character {
    const result = this.character;
    this.reset();
    return result;
  }
}

class Director {
  private characterBuilder: CharacterBuilder;

  setCharacterBuilder(characterBuilder: CharacterBuilder) {
    this.characterBuilder = characterBuilder;
  }

  buildStarterCharacter() {
    this.characterBuilder
      .addHelmet("starter")
      .addTorsoArmor("starter")
      .addArmsCover("starter")
      .addPants("starter");
  }

  buildSniperCharacter() {
    this.characterBuilder
      .addHelmet("ghillie head cover")
      .addTorsoArmor("ghillie torso cover")
      .addArmsCover("ghillie arms cover")
      .addPants("ghillie pants")
      .addPrimaryWeapon("Bolt sniper rifle")
      .addSecondaryWeapon("pistol")
      .addMeleeWeapon("knife");
  }
}

// Client code
const director = new Director();
const builder = new CharacterBuilder();
director.setCharacterBuilder(builder);
director.buildStarterCharacter();
console.log(builder.getCharacter());

director.buildSniperCharacter();
console.log(builder.getCharacter());
