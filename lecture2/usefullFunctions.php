<?php

if (isset($i)){
    echo $i;
}

$city = 'Osijek';

echo strlen($city) . PHP_EOL;

$city = '     Osijek    ';
echo strlen($city);
echo strlen($city) . PHP_EOL;

$city = 'Osijek is the best city';
echo '<hr>';
echo strpos($city, 'city');
echo '<hr>';
if (strpos($city, 'city')!== false){
    echo 'Contains city' . PHP_EOL;
}

$i = 5;
if (is_int($i)){
    echo 'is int.';
}

$array = [1,2];
if (is_array($array)){
    echo count($array);
}

$text = '<h1>Content</h1>';
echo $text;

echo htmlspecialchars($text);

$array = [];
if (empty($array)){
    echo 'empty';
}

echo password_hash('filip123', PASSWORD_DEFAULT);

$i = new DateTime();

header('Content-Type: application/json');
echo json_encode($i);
