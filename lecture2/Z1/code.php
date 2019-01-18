<?php
$string = $_POST['string'];
//echo $string;


$integerArray = array_map('intval', explode(',', $string));
//print_r($integerArray);
//echo '<hr>';
sort($integerArray);

//var_dump($integerArray);
$arrayLenght = count($integerArray);

for ($i= 0;$i<$arrayLenght;$i++){
    echo $integerArray[$i]. '<br>';
}

?>