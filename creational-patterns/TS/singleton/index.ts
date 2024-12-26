class Singleton {
  static #instance: Singleton;

  private constructor() {}

  public static get instance(): Singleton {
    if (!Singleton.#instance) {
      Singleton.#instance = new Singleton();
    }

    return Singleton.#instance;
  }

  public someSingletonFunc() {
    console.log("do something");
  }
}

const instance1 = Singleton.instance;
const instance2 = Singleton.instance;

if (instance1 === instance2) {
  console.log("Singleton is working as intended");
} else {
  console.log(
    "Singleton did not work properly , we have two different Singleton instances"
  );
}
