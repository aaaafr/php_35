<?php

# Correzione OOP-1
/* 
create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

*/


/* class Movie
{
  var $title;
  public $desc;
  public $cast;

  function __construct(string $title, string $desc, array $cast)
  {
    $this->title = $title;
    $this->desc = $desc;
    $this->cast = $cast;
  }

  public function getCast()
  {
    return $this->cast;
  }
}

$starwars = new Movie('starwars', 'Lorem ipsum dolor sit amet.', ['Person 1 ', 'Person 2', 'Yoda']);
$mandalorian = new Movie('mandalorian', 'Lorem ipsum dolor sit amet.', ['Mando ', 'The child']);

var_dump($starwars);
var_dump($mandalorian);

var_dump($starwars->getCast()); */


/* OOP 2  */

// Inheritance
/* class Person
{
  public $name;
  public $lastname;

  public function __construct(string $name, string $lastname)
  {
    $this->name = $name;
    $this->lastname = $lastname;
  }

  public function walk()
  {
    return 'I am Walking';
  }

  public function run()
  {
    return 'I am running';
  }
}

class User extends Person
{

  public $nickname;
  public $email;
  public $password;

  public function __construct($name, $lastname, $nickname, $email, $password)
  {
    parent::__construct($name, $lastname);
    $this->nickname = $nickname;
    $this->email = $email;
    $this->password = $password;
  }

  public function subscribe()
  {
    return 'I subscribe to the newsletter';
  }
}


$domenico = new Person('Domenico', 'Santo');
$carmen = new User('Carmen', 'Galan', 'cargalan', 'carmen@example.com', 'q12345');

var_dump($domenico);
var_dump($carmen); */
/* var_dump($carmen->walk());
var_dump($carmen->subscribe()); */


/* Polimorfismo e Visibilitá */
class Product
{
  protected $name;
  protected $description;
  protected $price;
  protected $qty;
  protected $discount;
  private $barcode = "ABC123";


  function __construct($name, $description, $price, $qty = 5)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->qty = $qty;
  }

  public function calcDiscount()
  {

    $this->checkStock($this->qty);

    return $this->price -= $this->price * $this->discount / 100;
  }
  // Function Visibility 
  protected function checkStock($qty)
  {
    if ($qty > 10) {
      $this->disount = 10;
    } else if ($qty < 5) {
      //
    }
  }

  public function description()
  {

    return $this->description;
  }

  // Function Visibility 
  private function getBarCode()
  {
    return $this->barcode;
  }
}

class Car extends Product
{

  function __construct($name, $desc, $price, $qty, $engine, $fuel)
  {
    parent::__construct($name, $desc, $price, $qty);
    $this->engine = $engine;
    $this->fuel = $fuel;
  }

  public function description()
  {
    return 'Car Description: ' . $this->description;
  }

  // Visibility 
  public function getCode()
  {
    return $this->barcode;
  }
}


# Product instance
$speaker = new Product('Anker', 'Lorem ipsum dolor sit.', 40.99, 10);
var_dump($speaker);
// get the name
//var_dump($speaker->name);
#var_dump($speaker->description); // Proprietá protetta non accessibile
var_dump($speaker->description());

//$speaker->checkStock($speaker->qty);  # Uncaught Error: Call to protected method Product::checkStock()

// var_dump($speaker->barcode); # Uncaught Error: Cannot access private property Product::$barcode

//var_dump($speaker->getBarCode());



// Car Instance
$car = new Car('Tesla X', ' Tesla Lorem ipsum dolor sit amet.', 300000, 4, 3000, 'Electric');
var_dump($car);
//var_dump($car->name);
#var_dump($car->description); // Proprietá protetta non accessibile
var_dump($car->description());

//var_dump($car->barcode);
