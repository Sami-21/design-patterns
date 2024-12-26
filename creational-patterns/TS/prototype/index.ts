interface IPrototype {
  clone();
}

class Product implements IPrototype {
  private name: string;
  private description: string;
  private price: number;
  private seller: string;

  constructor(
    name: string,
    description: string,
    price: number,
    seller: string
  ) {
    this.name = name;
    this.description = description;
    this.price = price;
    this.seller = seller;
  }

  clone(): Product {
    return Object.create(this);
  }

  public set setName(name: string) {
    this.name = name;
  }

  public get getName(): string {
    return this.name;
  }

  public set setDescription(description: string) {
    this.description = description;
  }

  public get getDescription(): string {
    return this.description;
  }

  public set setPrice(price: number) {
    this.price = price;
  }

  public get getPrice(): number {
    return this.price;
  }

  public set setSeller(seller: string) {
    this.seller = seller;
  }

  public get getSeller(): string {
    return this.seller;
  }
}

const product = new Product("PS5", "playstation 5", 500, "Sony");
console.log(product);

const productClone = product.clone();
console.log(productClone);
productClone.setName = "xbox series x";
console.log(product);
console.log(productClone);
