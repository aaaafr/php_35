<?php

$posts = [
  [
    'title' => 'Learn PHP',
    'subtitle' => 'Personal Home Page',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magni esse excepturi ut molestiae saepe rerum ratione harum velit quia.'

  ],
  [
    'title' => 'Learn HTML',
    'subtitle' => 'Personal Home Page',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magni esse excepturi ut molestiae saepe rerum ratione harum velit quia.'

  ],
  [
    'title' => 'Learn CSS',
    'subtitle' => 'Personal Home Page',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magni esse excepturi ut molestiae saepe rerum ratione harum velit quia.'

  ],
  [
    'title' => 'Learn SASS',
    'subtitle' => 'Personal Home Page',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magni esse excepturi ut molestiae saepe rerum ratione harum velit quia.'

  ],
];

$numbers = [
  'one',
  'one point five'
];

var_dump($numbers);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Blog</title>
</head>

<body>

  <h1>PHP Blog</h1>

  <div class="posts">
    <?php for ($i = 0; $i < count($posts); $i++) {
      //var_dump($posts[$i]);
      $post = $posts[$i];
    ?>
      <div class="card">
        <h2><?= $post['title']; ?></h2>
        <h4><?php echo $post['subtitle']; ?></h4>
        <p><?= $post['body']; ?></p>
      </div>

    <?php }
    ?>
  </div>

</body>

</html>