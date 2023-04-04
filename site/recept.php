<?php
require 'database.php';

$id = $_GET['id'];

//de sql query
$sql = "SELECT * FROM recepten Where id = $id";
$result = mysqli_query($conn, $sql);
$all_recepten = mysqli_fetch_assoc($result);

//hier wordt de query uitgevoerd met de database


/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_users = mysqli_fetch_all($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <?php include 'navbar.php' ?>
    <div style="align-content: center;">
        <h1><?php echo  $all_recepten['naam'] ?></h1>
    </div>
    <div>
        <img class="foto-special"  src="images/<?php echo $all_recepten["foto"] ?>" />
    </div>

    <h3>beschrijving</h3>
    <p><?php echo $all_recepten['beschrijving']; ?></p>

    <h3>afkoeltijd</h3>
    <p><?php echo $all_recepten['afkoeltijd']; ?></p>

    <h3>ingredienten</h3>
    <p><?php echo $all_recepten['ingredienten']; ?></p>

    <h3>tijdsduur</h3>
    <p><?php echo $all_recepten['tijdsduur']; ?></p>

    <h3>aantal ingredienten</h3>
    <p><?php echo $all_recepten['aantal_ingredienten']; ?></p>

    <h3>aantal personen</h3>
    <p><?php echo $all_recepten['aantal_personen']; ?></p>




    <?php include 'footer.php' ?>
</body>

</html>