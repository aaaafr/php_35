<?php
/* 
Class Sinstassi
- parola chiave "class"
- nome classe in PascalCase 
*/

/**
 * Person Class
 * @author Fabio <email@email.com>
 * @copyright 2021 Fabio
 */
class Person
{
  public $name;
  public $age;
}

/* 
Creare istanza della classe (oggetto)
- parola chiave 'new'
*/

$yoda = new Person();
$baby_yoda = new Person();

// Assegnare un valore agli attributi della classe
$yoda->name = 'Yoda';
$yoda->age = 200;

$baby_yoda->name = "Groku";
$baby_yoda->age = 2;

// Dumpiamo le due classi
var_dump($yoda, $baby_yoda);


// Getters an Setters
class Car
{
  public $make;
  public $model;
  public $price;

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice(int $price)
  {
    $this->price = $price;
  }
}

// Crea istance new class object

$tesla = new Car();
$tesla->make = 'Tesla';
$tesla->model = 'X';

var_dump($tesla);

$tesla->setPrice(50000);
var_dump($tesla->getPrice());

var_dump($tesla);


$alfa = new Car();
$alfa->make = 'Alfa';
$alfa->model = 'Giulietta';
$alfa->price = 20000;
var_dump($alfa);
var_dump($alfa->price);

$alfa->setPrice(30000);
var_dump($alfa->getPrice());
var_dump($alfa);


// Class Constructor

class Product
{
  public $name;
  public $desc;
  public $price;
  public $instock;

  /**
   * Product Constructor
   *
   * @param string $name
   * @param string $desc
   * @param float $price
   * @param boolean $instock
   */
  public function __construct(string $name, string $desc, float $price, bool $instock = false)
  {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
    $this->instock = $instock;
  }
}


$laptop = new Product('Idea pad', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor.', 600);
var_dump($laptop);

var_dump($laptop->name, $laptop->desc, $laptop->price);

$laptop->name = 'new laptop';
var_dump($laptop);
