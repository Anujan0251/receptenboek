<?php
require "database.php";
//de sql query
$sql = "SELECT * FROM recepten";
//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header>
        <img class="logo" src="/images/logo.png" />
        <nav> 
          <ul class="nav__links">
            <li><a href="index.php">home</a></li>
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
          </ul>
        </nav>
        <a class="cta" href="contact.php"><button>Contact</button></a>
      </header> 
      <img class="banner" src="/images/banner1.png" />
<div class="flex-container">

  <?php foreach ($all_recepten as $recept) : ?>

    <div class="recept-blok">

  <div class="naam">
   <h3><?php echo $recept["naam"] ?></h3>
  </div>
  <img src="images/<?php echo $recept["foto"] ?>">
</div>

  <?php endforeach  ?>

</body>

</html>