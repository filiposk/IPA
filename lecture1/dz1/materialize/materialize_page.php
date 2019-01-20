<!doctype html>

<html lang="en">
<head>
    <?php include_once "../template/head.php" ?>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


<body>

<nav>
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="../index.php">Index</a></li>
            <li><a href="../bootstrap/bootsrap_page.php">Bootstrap</a></li>
            <li><a href="../foundation/foundation_page.php">Foundation</a></li>
            <li><a href="../skeleton/Skeleton-2.0.4/skeleton_page.php">Skeleton</a></li>
            <li><a href="materialize_page.php">Materialize</a></li>
        </ul>
    </div>
</nav>

<p>Za primljena 4 broja prikazati broj koristeći potpisivanja brojeva jednog ispod drugog.</p>

<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];
$r = $a + $b + $c + $d;
?>

<div style="width: 30%">
    <p style="text-align: right;">
        <?php
        echo "$a <br> + $b <br>  + $c <br> + $d <hr />", $r;
        ?>
    </p>

</div>



</body>
</html>