<?php
require 'database.php';

$sql = "SELECT * FROM recepten";

$result = mysqli_query($conn, $sql);

$all_recepten = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'navbar.php' ?>
      </header> 
      <img class="banner" src="/images/banner1.png" />
      <div class="recepten-container">

            <?php foreach ($all_recepten as $recept) : ?>
                <a href="recept.php?id=<?php echo $recept['id']?>">
                <div class="recept-blok">

                    <div class="naam"> 
                        <h3><?php echo $recept["naam"] ?></h3>
                    </div>
                    <img src="images/<?php echo $recept["foto"] ?>"/>
                </div>
                </a>
        <?php endforeach  ?>
    </div>

    

 <?php include 'footer.php' ?>
</body>
</html>