<?php

require __DIR__ . '/classes/Product.php';

$products = [
  new Product('Acer', 'Lorem ipsum dolor sit amet.', 300.99),
  new Product('HP', 'Lorem ipsum dolor sit amet.', 100.99),
  new Product('Asus', 'Lorem ipsum dolor sit amet.', 450.99),
  new Product('Macbook', 'Lorem ipsum dolor sit amet.', 1300.99),
  new Product('Sony', 'Lorem ipsum dolor sit amet.', 200.99),
  new Product('Lenovo', 'Lorem ipsum dolor sit amet.', 500.99),
];

//var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC Store</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: sans-serif;
    }

    #products {
      display: flex;
      flex-wrap: wrap;
    }

    .product {
      width: 300px;
      background: white;
      color: black;
      margin: 0.5rem;
      padding: 0.5rem;
    }
  </style>
</head>

<body>

  <header id="site_header">
    <h1>
      PC STORE
    </h1>
  </header>
  <main id="products">
    <?php foreach ($products as $product) : ?>
      <div class="product">
        <img src="<?= $product->img; ?>" alt="<?= $product->name; ?>">
        <h1>
          <?= $product->name; ?>
        </h1>
        <p><?= $product->desc ?></p>
        <div class="price"><?= $product->price; ?></div>
      </div>
    <?php endforeach; ?>
  </main>
  <footer id="site_footer">
  </footer>

</body>

</html>