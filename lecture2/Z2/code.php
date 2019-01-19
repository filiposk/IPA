<?php
$string = $_POST['string'];
//echo $string;


$integerArray = array_map('intval', explode(',', $string));
//print_r($integerArray);
//echo '<hr>';
sort($integerArray);

//var_dump($integerArray);
$arrayLenght = count($integerArray);


foreach ($integerArray as $key => $value){
    $sum+=$value;
}

echo $sum;
echo '<hr>';
$ar = ($sum / count($integerArray) + 1);
echo $ar;


echo '<hr>';
//echo $sum;
//
//echo '<hr>';




//$closest = null;
//foreach ($integerArray as $item) {
//    if ($closest === null || abs($ar - $closest) > abs($value - $ar)) {
//        $closest = $item;
//    }
//}
//echo '<br>';
//echo '<strong>'. $closest . '</strong>';

$closest = null;
foreach ($integerArray as $item) {
    if ($closest === null || abs($ar - $closest) > abs($item - $ar)) {
        $closest = $item;
    }
}
//echo $closest;
foreach ($integerArray as $key => $value){


    if($value == $closest){
        echo "<strong>$value <br></strong>";
    }else{
        echo $value. '<br>';
    }
}

echo '<hr>';



?>