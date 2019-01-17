<!doctype html>

<html lang="en">
<head>
    <?php include_once "../template/head.php" ?>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
</head>

<body>

<nav class="navigation">
    <a href="#" class="menu-icon">
        <i class="fa fa-bars"></i>
    </a>
    <ul class="main-navigation" role="navigation">
        <li><a href="../../index.php">Index</a></li>
        <li><a href="../../bootstrap/bootsrap_page.php">Bootstrap</a></li>
        <li><a href="../../foundation/foundation_page.php">Foundation</a></li>
        <li><a href="skeleton_page.php">Skeleton</a></li>
        <li><a href="../../materialize/materialize_page.php">Materialize</a></li>
    </ul>
</nav>

<p style="font-size: medium">Kreirati stranicu koja za primljeni GET parametar toj stranici daje primljenu vrijednost u naslov.</p>

<?php
$h1 = $_GET["h1"];
?>
<h1><?php echo $h1; ?></h1>
</body>
</html>