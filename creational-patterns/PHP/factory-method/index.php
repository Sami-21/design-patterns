<?php

interface Toy
{
  public function play(): void;
}

class Car implements Toy
{
  public function play(): void
  {
    return;
  }
}

class Doll implements Toy
{
  public function play(): void
  {
    return;
  }
}

class Robot implements Toy
{
  public function play(): void
  {
    return;
  }
}

class ToyFactory {}
