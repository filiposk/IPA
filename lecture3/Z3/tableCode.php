<?php

include_once "index.php";

$redova=$_POST["number1"];
$kolona=$_POST ["number2"];



function napuniMatricu($redova,$kolona){
    $podaci = array();
    for($i=0;$i<$redova;$i++){
        $kolone=array();
        for($j=0;$j<$kolona;$j++){
            $kolone[]=0;
        }
        $podaci[]=$kolone;
    }

    //čarolija - napuniti
    $brojac=1;


    // prvi krug
    $a=1;  // brojač krugova

    while ($brojac<=$redova*$kolona){
        // while ($a<$redova/2 || $a<$kolona/2){

        for($i=$kolona-$a; $i>=($a-1);$i--){              //1 potez
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$redova-$a][$i]=$brojac++;
        }

        for($i=$redova-($a+1); $i>=($a-1);$i--){              // 2 potez
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$i][$a-1]=$brojac++;
        }

        for ($i=$a;$i<$kolona-($a-1);$i++){                 //3 potez
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$a-1][$i]=$brojac++;

        }

        for($i=$a;$i<$redova-$a;$i++){                //4 potez
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$i][$kolona-$a]=$brojac++;

        }
        $a++;
    }
    return $podaci;
}




$podaci = napuniMatricu($redova,$kolona);




echo "<table>";
for($i=0;$i<$redova;$i++){
    echo "<tr>";
    for($j=0;$j<$kolona;$j++){
        echo "<td>" . $podaci[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";