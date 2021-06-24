<?php
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/vars.php';
require __DIR__ . '/templates/header.php';

?>

<main id="app">

  <div class="products">

    <div class="product" v-for="product in products">

      <img :src="product.img" :alt="product.title">
      <div class="product_details">
        <h2>{{product.title}}</h2>
        <p>{{product.desc}}</p>
        <div>{{product.price}}</div>
      </div>

    </div>

  </div>


</main>

<?php


require __DIR__ . '/templates/footer.php';
