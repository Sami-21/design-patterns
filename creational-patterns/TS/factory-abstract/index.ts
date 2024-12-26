interface IButton {
  getText(): string;
  onClick(): void;
  render(): void;
}

class WebButton implements IButton {
  private text: string;

  getText() {
    return this.text;
  }

  onClick() {
    console.log("web button clicked");
  }

  render() {
    console.log("render web button");
  }
}

class MobileButton implements IButton {
  private text: string;

  getText() {
    return this.text;
  }

  onClick() {
    console.log("mobile button clicked");
  }

  render() {
    console.log("render mobile button");
  }
}

class DesktopButton implements IButton {
  private text: string;

  getText() {
    return this.text;
  }

  onClick() {
    console.log("desktop button clicked");
  }

  render() {
    console.log("render desktop button");
  }
}

interface ITextField {
  getText: () => string;
  onChange(text: string): void;
  render(): void;
}

class WebTextField implements ITextField {
  private text: string;

  getText() {
    return this.text;
  }

  onChange(newValue: string) {
    console.log("new value in web text field is" + newValue);
  }

  render() {
    console.log("render web text field");
  }
}

class MobileTextField implements ITextField {
  private text: string;

  getText() {
    return this.text;
  }

  onChange(newValue: string) {
    console.log("new value in mobile text field is " + newValue);
  }

  render() {
    console.log("render mobile text field");
  }
}

class DesktopTextField implements ITextField {
  private text: string;

  getText() {
    return this.text;
  }

  onChange(newValue: string) {
    console.log("new value in desktop text field is " + newValue);
  }

  render() {
    console.log("render desktop text field");
  }
}

interface ICheckBox {
  getValue(): boolean;
  render(): void;
}

class WebCheckBox implements ICheckBox {
  private value: boolean;

  getValue() {
    return this.value;
  }

  render() {
    console.log("render web checkbox");
  }
}

class MobileCheckBox implements ICheckBox {
  private value: boolean;

  getValue() {
    return this.value;
  }

  render() {
    console.log("render mobile checkbox");
  }
}

class DesktopCheckBox implements ICheckBox {
  private value: boolean;

  getValue() {
    return this.value;
  }

  render() {
    console.log("render desktop checkbox");
  }
}

interface IGUIFactory {
  createButton(): IButton;
  createTextField(): ITextField;
  createCheckBox(): ICheckBox;
}

class WebGUIFactory implements IGUIFactory {
  createButton(): IButton {
    return new WebButton();
  }

  createTextField(): ITextField {
    return new WebTextField();
  }

  createCheckBox(): ICheckBox {
    return new WebCheckBox();
  }
}

class MobileGUIFactory implements IGUIFactory {
  createButton(): IButton {
    return new MobileButton();
  }

  createTextField(): ITextField {
    return new MobileTextField();
  }

  createCheckBox(): ICheckBox {
    return new MobileCheckBox();
  }
}

class DesktopGUIFactory implements IGUIFactory {
  createButton(): IButton {
    return new DesktopButton();
  }

  createTextField(): ITextField {
    return new DesktopTextField();
  }

  createCheckBox(): ICheckBox {
    return new DesktopCheckBox();
  }
}
