<?php

for ($i=0;$i<10;$i++){
    echo $i. '<br>';
}

for ($i=0;$i<100;$i++) {
    if ($i === 5) {
        break;
    }
    if ($i != 3) {
        continue;
        break;
    }
}
    echo $i . ' Osijek<br/>';

    for ($i=0;$i<5;$i++){
        for ($j=0;$j<5;$j++){
            echo $i+$j, " ";
        }
    }


for($i=0;$i<5;$i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j === 2) {
            break 2;
        }
        echo $i + $j, " ";
    }
    echo "<br />";
}