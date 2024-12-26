<?php

interface IButton
{
  public function getText(): string;
  public function onClick(): void;
  public function render(): void;
}

class WebButton implements IButton
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onClick(): void
  {
    echo "web button clicked";
  }

  public function render(): void
  {
    echo "render web button";
  }
}

class MobileButton implements IButton
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onClick(): void
  {
    echo "mobile button clicked";
  }

  public function render(): void
  {
    echo "render mobile button";
  }
}

class DesktopButton implements IButton
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onClick(): void
  {
    echo "desktop button clicked";
  }

  public function render(): void
  {
    echo "render desktop button";
  }
}

interface ITextField
{
  public function getText(): string;
  public function onChange(string $text): void;
  public function render(): void;
}

class WebTextField implements ITextField
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onChange(string $newValue): void
  {
    echo "new value in web text field is" . $newValue;
  }

  public function render(): void
  {
    echo "render web text field";
  }
}

class MobileTextField implements ITextField
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onChange(string $newValue): void
  {
    echo "new value in mobile text field is" . $newValue;
  }

  public function render(): void
  {
    echo "render mobile text field";
  }
}

class DesktopTextField implements ITextField
{
  private string $text;

  public function getText(): string
  {
    return $this->text;
  }

  public function onChange(string $newValue): void
  {
    echo "new value in desktop text field is" . $newValue;
  }

  public function render(): void
  {
    echo "render desktop text field";
  }
}

interface ICheckBox
{
  public function getValue(): bool;
  public function render(): void;
}

class WebCheckBox implements ICheckBox
{
  private bool $value;

  public function getValue(): bool
  {
    return $this->value;
  }

  public function render(): void
  {
    echo "render web checkbox";
  }
}

class MobileCheckBox implements ICheckBox
{
  private bool $value;

  public function getValue(): bool
  {
    return $this->value;
  }

  public function render(): void
  {
    echo "render mobile checkbox";
  }
}

class DesktopCheckBox implements ICheckBox
{
  private bool $value;

  public function getValue(): bool
  {
    return $this->value;
  }

  public function render(): void
  {
    echo "render desktop checkbox";
  }
}

interface IGUIFactory
{
  public function createButton(): IButton;
  public function createTextField(): ITextField;
  public function createCheckBox(): ICheckBox;
}

class WebGUIFactory implements IGUIFactory
{
  public function createButton(): IButton
  {
    return new WebButton();
  }

  public function createTextField(): ITextField
  {
    return new WebTextField();
  }

  public function createCheckBox(): ICheckBox
  {
    return new WebCheckBox();
  }
}

class MobileGUIFactory implements IGUIFactory
{
  public function createButton(): IButton
  {
    return new MobileButton();
  }

  public function createTextField(): ITextField
  {
    return new MobileTextField();
  }

  public function createCheckBox(): ICheckBox
  {
    return new MobileCheckBox();
  }
}

class DesktopGUIFactory implements IGUIFactory
{
  public function createButton(): IButton
  {
    return new DesktopButton();
  }

  public function createTextField(): ITextField
  {
    return new DesktopTextField();
  }

  public function createCheckBox(): ICheckBox
  {
    return new DesktopCheckBox();
  }
}
