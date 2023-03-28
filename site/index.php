<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>

</head>

<body>
    <header>

        <div> <img class="logo" src="logo.jpg" /></div>
        <nav>
            <ul class="nav_links">
                <li><a href="default.asp">Home</a></li>
                <li><a href="news.asp">News</a></li>
                <li><a href="contact.asp">Contact</a></li>
                <li><a href="about.asp">About</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="recepten"
    < href="<?php echo $recept ['naam'] ?>.php" class="recept-card"> 
    <?php foreach ($all_recepten as $recept) : ?>
        <div class="container">
            <div class="plaatje">
                <img src="images/<?php echo $recept["foto"] ?>">
            </div>
        </div>
    <?php endforeach ?>







    </div>
</body>

</html>