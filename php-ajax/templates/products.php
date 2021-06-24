<div class="products">
  <?php

  foreach ($products as $product) : ?>

    <div class="product">
      <img src="<?= $product['img']; ?>" alt="">
      <div class="product_details">
        <h2><?= $product['title']  ?></h2>
        <p><?= $product['desc']  ?></p>

        <?php if ($product['discount']) : ?>
          <div>
            <del><?= $product['price'] . ' ' .  $product['currency'] ?> </del>
            <span style="color: red;"> <?= apply_discount($product['price'], $product['discount']) ?> (<?= $product['discount'] ?>% off)</span>
          </div>
        <?php else : ?>
          <div><?= $product['price'] . ' ' .  $product['currency'] ?></div>
        <?php endif; ?>



      </div>
    </div>

  <?php endforeach; ?>
</div>