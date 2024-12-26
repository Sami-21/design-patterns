interface Toy {
  play: () => void;
}

class Car implements Toy {
  public play(): void {
    return;
  }
}

class Doll implements Toy {
  public play(): void {
    return;
  }
}

class Robot implements Toy {
  public play(): void {
    return;
  }
}

class ToyFactory {}
