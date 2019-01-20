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
$ar = ($sum / $arrayLenght);
echo $ar;


echo '<hr>';

$closest = null;
foreach ($integerArray as $item) {
    if ($closest === null || abs($ar - $closest) > abs($item - $ar)) {
        $closest = $item;
    }
}
//echo $closest;
foreach ($integerArray as $key => $value) {

    if ($value == max($integerArray)) {
        $tableLenght = sqrt($value + 1);
    }
}

echo $tableLenght;


echo '<hr>';

foreach ($integerArray as $key => $value){
    if($value % 2 === 0) {
        $evenArray[] = $value;
    }
}

sort($evenArray);

foreach ($evenArray as $key => $value){
    if ($value == $closest){
        echo "<strong>$value <br></strong>";
    }else{
        echo $value . '<br>';
    }
}


?>