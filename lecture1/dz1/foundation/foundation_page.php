<!doctype html>

<html lang="en">
<head>
    <?php include_once "../template/head.php" ?>
    <link rel="stylesheet" type="text/css" href="Foundation/css/app.css">
    <link rel="stylesheet" type="text/css" href="Foundation/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="Foundation/css/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="Foundation/js/app.js">
</head>

<body>

<ul class="vertical menu">
    <li><a href="../index.php">Index</a></li>
    <li><a href="../bootstrap/bootsrap_page.php">Bootstrap</a></li>
    <li><a href="foundation_page.php">Foundation</a></li>
    <li><a href="../skeleton/Skeleton-2.0.4/skeleton_page.php">Skeleton</a></li>
    <li><a href="../materialize/materialize_page.php">Materialize</a></li>
</ul>

<p style="font-size: medium">Za primljena 3 parametara ispisati njhov zbroj uz prikaz cijelog izraza.</p>

<?php
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$number3 = $_GET["number3"];
$res = $number1 + $number2 + $number3;

if (isset($number1,$number2,$number3))
{
    echo "$number1 + $number2 + $number3 = $res ";
}


?>


</body>
</html>