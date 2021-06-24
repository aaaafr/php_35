<header>
  <div class="logo">
    <h1><?php echo $site_title; ?></h1>
  </div>

  <nav>
    <?php
    foreach ($site_menu as $item) : ?>
      <a href="<?= $item['href']; ?>" class="<?= $_SERVER['REQUEST_URI'] === $item['href'] ? 'active' : '' ?>"><?= $item['text'];  ?></a>
    <?php endforeach; ?>

  </nav>

</header>