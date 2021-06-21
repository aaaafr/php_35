<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";

$name = $_GET["name"];
$age = $_GET["age"];
$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus quidem exercitationem aut, quo perferendis eos voluptates. Modi maiores minima consectetur, cumque distinctio blanditiis, culpa magnam sed eos quidem quas alias.";


echo explode('.', $lorem);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP GET Super global</title>
</head>

<body>

<h1>Hi <?php echo $name; ?>, Age: <?php echo $age; ?> </h1>

<?php echo $lorem; ?>

<?php echo str_replace('eos', 'Baby Yoda', $lorem); ?>



</body>

</html>