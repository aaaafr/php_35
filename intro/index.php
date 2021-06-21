  <?php
  // Codice php
  $name = 'Fabio';
  $job = "Teacher";
  # Variabili
  $full_name = "Fabio Paci";
  $fullName = "baby yoda";

  /* 
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus doloremque ipsum a repellat, facere amet ea culpa blanditiis deleniti voluptatibus nisi dolore aut impedit iusto iure. Sit, fuga quaerat. Eius.
*/


  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
  </head>

  <body>


    <h1>Hi, my name is <?php echo $name; ?> 
    </h1>
    <h3> <?=  $job ?></h3>
    <p><?php echo $fullName; ?> </p>
    <p>
      <?php echo 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, ea.'; ?> 
      <?php echo 123; ?>
    </p>

  </body>

  </html>