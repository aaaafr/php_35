<?php
$names = ['Eduardo', 'Dumi', 'Carmen', 'Eveling'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basics</title>
</head>

<body>

  <h1>PHP Basics</h1>

  <p>
    <?php
    for ($i = 0; $i < count($names); $i++) {
      echo $names[$i];
      echo '<br>';
    }

    ?>
  </p>


  <?php
  for ($i = 0; $i < count($names); $i++) {
    echo '<p>';
    echo $names[$i];
    echo '</p>';
  }

  ?>



  <?php for ($i = 0; $i < count($names); $i++) { ?>

    <p> <?php echo $names[$i]; ?> </p>

  <?php } ?>


</body>

</html>