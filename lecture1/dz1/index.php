<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>
</head>

<?php
$colour = $_GET["colour"];
?>

<body style="background-color: <?php echo $colour;?>">


<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="bootstrap/bootsrap_page.php">Bootstrap</a></li>
    <li><a href="foundation/foundation_page.php">Foundation</a></li>
    <li><a href="skeleton/Skeleton-2.0.4/skeleton_page.php">Skeleton</a></li>
    <li><a href="materialize/materialize_page.php">Materialize</a></li>
</ul>

<p> Kreirati stranicu koja za primljeni GET parametar(colour) boja stranicu u odnosu na vrijednost parametra.</p>


</body>
</html>