<?php

// Complete the plusMinus function below.
function plusMinus($arr) 
{   
    array_walk($arr, 'intval');
    $count = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;

    for($i = 0; $i < $count; $i++){
        if($arr[$i] > 0){
            $positive += 1;
        }elseif($arr[$i] < 0){
            $negative += 1;
        }
        else{
            $zero += 1;
        }
    }
    $result = [];
    $positive = round($positive/$count, 6);
    $negative = round($negative/$count, 6);
    $zero = round($zero/$count, 6);

    print($positive."\n");
    print($negative."\n");
    print($zero);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
