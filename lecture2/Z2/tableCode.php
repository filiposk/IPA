<?php

include_once "input.php";
$string = $_POST['string'];
//echo $string;


$integerArray = array_map('intval', explode(',', $string));
//print_r($integerArray);
//echo '<hr>';
sort($integerArray);

//var_dump($integerArray);
$arrayLenght = count($integerArray);


$ar = (array_sum($evenArray) / $arrayLenght);
echo $ar;


echo '<hr>';

$closest = null;
foreach ($evenArray as $item) {
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
$roundedTableLenght = round($tableLenght, 0, PHP_ROUND_HALF_UP);
echo $roundedTableLenght;


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

echo '<hr>';

echo "<table>";
$y = 1;
for($i = 0; $i < $roundedTableLenght; $i++){
    echo "<tr>";
    for($j = 0;$j < $roundedTableLenght; $j++){
        if(in_array($y,$evenArray) && $y == $closest){
            echo "<td><strong>", $y ,"</strong> </td>";
        }elseif(in_array($y,$evenArray)){
            echo "<td>", $y, "</td>";
        }else{
            echo "<td>" , "</td>";
        }
        $y++;
    }
    echo "</tr>";
}
echo "</table>";

echo '<hr>';
var_dump($evenArray);