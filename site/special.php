<?php
require 'database.php';

$sql = "SELECT * FROM recepten WHERE tijdsduur = (SELECT max(tijdsduur) FROM recepten);";

$result = mysqli_query($conn, $sql);

$duur = mysqli_fetch_all($result,MYSQLI_ASSOC);


$sql = "SELECT * FROM recepten WHERE moeilijkheid = 'makkelijk'";

$result = mysqli_query($conn, $sql);

$makkelijker = mysqli_fetch_all($result,MYSQLI_ASSOC);

$sql = "SELECT * FROM recepten WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM recepten)";

$result = mysqli_query($conn, $sql);

$aantal_ingredienten = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<?php include 'navbar.php' ?>
<div class="flex-container">


<?php foreach($makkelijker as $makkelijk): ?>
    <a href="recept.php?id=<?php echo $makkelijk['id'] ?>">
        <div class="recept-blok">

            <div class="naam">
                <h3><?php echo $makkelijk["naam"] ?></h3>
                <h2> makkelijkst om te maken</h2>
            </div>
            <img src="images/<?php echo $makkelijk["foto"] ?>" />
        </div>
    </a>
<?php endforeach; ?>
<?php foreach($duur as $duurt): ?>
    <a href="recept.php?id=<?php echo $duurt['id'] ?>">
        <div class="recept-blok">

            <div class="naam">
                <h2> langst durende om temaken </h2>
                <h3><?php echo $duurt["naam"] ?></h3>
            </div>
            <img src="images/<?php echo $duurt["foto"] ?>" />
        </div>
    </a>
<?php endforeach; ?>
<?php foreach($aantal_ingredienten as $aantal_ingredienten): ?>
    <a href="recept.php?id=<?php echo $aantal_ingredienten['id'] ?>">
        <div class="recept-blok">

            <div class="naam">
                <h3><?php echo $aantal_ingredienten["naam"] ?></h3>
            </div>
            <h2>Meeste ingredienten</h2>
            <img src="images/<?php echo $aantal_ingredienten["foto"] ?>" />
        </div>
    </a>
<?php endforeach; ?>


  
    

</div>
<?php include 'footer.php' ?>