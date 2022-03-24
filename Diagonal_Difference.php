<?php
/*
 *  'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $sum_primary = 0;
    $sum_secondary = 0;
    for($i=0;$i<count($arr);$i++)
    {    /* time Complexity is O(N2) */
        /*for($j=0;$j<count($arr);$j++)
        {
            if($i==$j)
            {
                $sum_primary = $sum_primary + $arr[$i][$j];
            }
            if(($i+$j) == count($arr) - 1)
            {
                $sum_secondary = $sum_secondary + $arr[$i][$j];
            }
        }*/
       /* time Complexity is O(N) */
        $sum_primary = $sum_primary + $arr[$i][$i];
        $sum_secondary = $sum_secondary + $arr[$i][count($arr)-$i-1];
    }
    $abs_diff = abs($sum_primary - $sum_secondary);
    return $abs_diff;

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


?>
