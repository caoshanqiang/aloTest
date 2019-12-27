<?php

/**
  *@author: @zuoyebang.com
  *@brief :
  *@data  : y-m-d
  *
  **/
Bd_Init::init();

function aloSort($arr){
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        $maxIndex = $i;
        for($j = $i+1;$j<$len;$j++){
            if($arr[$j]>$arr[$maxIndex]){
                $maxIndex = $j;

            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$maxIndex];
        $arr[$maxIndex] = $temp;
        }
    }
}

$a = [2,1,2,4,5,6,87,4,5];
$a = aloSort($a);
echo $a;
