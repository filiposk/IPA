<?php
$array = array(2,3,4,5,5); //old syntax

$array = [2,3,4,5,5];

// first element
echo $array[0];
echo '<hr>';
//last element
echo $array[count($array)-1];
echo '<hr>';
print_r($array);
echo '<hr>';

//add element into array
$array[] = 'Osijek';
echo $array[count($array)-1];
echo '<hr>';
print_r($array);
