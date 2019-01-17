<!doctype html>

<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php include_once "../template/head.php" ?>
</head>

<body>

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php">Index<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li class="active"><a href="bootsrap_page.php">Bootstrap</a></li>
                <li class="active"><a href="../foundation/foundation_page.php">Foundation</a></li>
                <li class="active"><a href="../skeleton/Skeleton-2.0.4/skeleton_page.php">Skeleton</a></li>
                <li class="active"><a href="../materialize/materialize_page.php">Materialize</a></li>
            </ul>
        </div>
    </div>
</nav>


<p style="font-size: medium"> Putem Get unjeti broj, te ispisati je li on paran ili neparan</p>

<?php
$number = $_GET["number"];
if ($number % 2 == 0)
{
    echo "broj je paran";
}
else{
    echo "broj je neparan";
}

?>



</body>
</html>