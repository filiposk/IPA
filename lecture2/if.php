<?php
$i = 3;

if ($i === 3){
    echo 'i is 3';
}

if ($i === 3){
    echo 'ok';
}else{
    echo 'not';
}


if ($i > 0){
    if ($i < 10){
        echo 'ok';
    }
}

$gender = 2;

if ($gender === 0){
    echo 'female';
} elseif ($gender === 1){
    echo 'male';
}elseif ($gender === 2){
    echo 'it';
} else{
    echo 'unknown';
}

//bad practice
if ($i === 3)
    echo '45 ok';
echo '43 ok';
// always use {}

//inline if
echo $i === 3 ? '51 ok' : '51 not';

if ($i === 3):
    ?>
<h1> naslov</h1>
<table>
    <thead>
    <tr>
        <th>Naslov</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>2</td>
    </tr>
    </tbody>
</table>
<?php
endif;