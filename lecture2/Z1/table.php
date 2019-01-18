<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" placeholder="Upiši brojeve" name="string"><br>
    <input type="submit" value="Ispiši tablicu">
</form>

<?php
$string = $_POST['string'];
echo $string;
echo '<hr>';
$inputArray = explode(",", $string);
print_r($inputArray);
echo '<hr>';
$integerArray = array_map('intval', explode(',', $string));
print_r($integerArray);
var_dump($integerArray)
?>

</body>
</html>

