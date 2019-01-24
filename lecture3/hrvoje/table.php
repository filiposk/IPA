<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="tabla.css">
	<title>Document</title>
</head>
<body>
<div id="wrapper">
	<div id="panel">
	    <p1 id="p1">
		INPUT
		</p1>
		<form id="form" action="tableCode.php" method="post">
			<input id="input" type="text" placeholder="Broj redaka" name="string"><br>
			<input id="input" type="text" placeholder="Broj stupaca" name="name"><br>
			<input id="button" type="submit" value="SUBMIT">
		</form>
		<p2 id="p2">
		OUTPUT
		</p2>
		<table id="table">

		</table>
	</div>
</div>


</body>
</html>