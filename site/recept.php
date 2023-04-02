<?php
require 'database.php';

$id = $_GET ['id'];

//de sql query
$sql = "SELECT * FROM recepten Where id = $id";
$result = mysqli_query($conn,$sql);
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
    <link rel="stylesheet" href="css/style.css" />
    <li><a href="index.php">home</a></li>
    <li><a href="index.php">contact</a></li>
    <li><a href="index.php">contact</a></li>
    <title>Document</title>
</head>

<body>
<img src="images/<?php echo $recept["foto"] ?>"/>
</body>

</html>