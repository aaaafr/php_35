<?php


#define db contants
define('DB_HOST', 'localhost');
define("DB_USER", 'fab');
define('DB_PASS', 'password');
define('DB_NAME', 'laravel_projects');
define('DB_PORT', '3306');


#connect to the database with mysqli
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

# check for connection errors
if ($connection && $connection->connect_error) {
  echo 'Sorry, connection failed! ' . $connection->connect_error;
} else {
  echo 'Connection successful! yeee';
  //var_dump($connection);
}


# Query the database
$query = "SELECT * FROM projects";
$results = $connection->query($query);
//var_dump($results);
# Loop over the query results

if ($results && $results->num_rows > 0) {
  //var_dump($results->fetch_assoc()); fetches a single element from the results
  while ($project = $results->fetch_assoc()) {
?>
    <h1><?= $project['title']; ?></h1>

<?php
  }
}
# Close the connection
$connection->close;
?>




<?php

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

# check for connection errors
if ($connection && $connection->connect_error) {
  echo 'Sorry, connection failed! ' . $connection->connect_error;
  exit();
}
echo 'Connection successful! yeee';
//var_dump($connection);
$name = $_GET['name'];
var_dump($name);
$query = "SELECT * FROM `users` WHERE `name` = '" . $name . "';";
echo $query;
$result = $connection->query($query);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL Injection</title>
</head>

<body>

  <form action="#" method="get">
    <div class="form-group">
      <label for="name">Type you name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="insert your name" aria-describedby="nameHelper">
      <small id="nameHelper" class="text-muted">Type you name of inject some sql 💥</small>
    </div>
  </form>


  <div class="injected">
    <?php //var_dump($name, $result);

    if ($result && $result->num_rows > 0) {
      var_dump($results->fetch_all()); //fetches a single element from the results
      while ($user = $result->fetch_assoc()) {
        var_dump($user);

    ?>
        <h1><?= $user['name']; ?></h1>

    <?php
      }
    } elseif ($result) {
      echo "0 results";
    } else {
      echo "query error";
    }
    # Close the connection
    //$connection->close;
    ?>

  </div>

</body>

</html>