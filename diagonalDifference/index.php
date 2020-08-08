<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $count = count($arr);
    $primary = 0;
    $secondary = 0;
    for($i = 0; $i < $count; $i++){
        for($j = 0; $j < $count; $j++){
            if($i == $j){
                $primary += $arr[$i][$j];
            }
            if($i == ($count-1-$j)){
                $secondary += $arr[$i][$j];
            }
        }
    }
    return abs($primary - $secondary);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
