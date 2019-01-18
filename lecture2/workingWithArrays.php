<?php
$t = 'id';
$array = [];

$array[] =[
    $t => 1,
    'name' => 'IPA',
    'users' => []
];

$array[0]['users'][] = ['firstName' => 'Filip', 'lastName' => 'Pavlović'];

$array['active'] = true;

echo '<pre>';
print_r($array);
echo '</pre>';

echo $array[0]['users'][0]['lastName'];