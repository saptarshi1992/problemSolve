Given an array of integers, find the longest subarray where the absolute difference between any two elements is less than or equal to 1.
<?php

 /* Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    // Write your code here
    $result = PHP_INT_MIN;
    $arr = array_fill(0, 100, 0);
   for ($i=0; $i <count($a) ; $i++) { 
       $arr[$a[$i]]++;
   }
   for ($j=1;$j<count($arr); $j++) { 
        $result = max($result,$arr[$j]+$arr[$j-1]);
   }
   return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>

