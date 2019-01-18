<?php

$stajInLoop = true;
$i = 0;
while($stajInLoop){
    echo $i . '<br />';
    $stajInLoop =++$i<10;
}

echo '<hr>';
$i = 10;
while ($i<10){
    if ($i === 7){
        break;
    }
    if ($i === 2){
        continue;
    }

    echo $i++ . '<br />';
}