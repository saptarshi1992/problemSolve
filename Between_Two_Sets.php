<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here
   $ans_lcm = $a[0];
   $ans_gcd = $b[0];
   $multiple =0;
   $result  =0;
   for($i=1;$i<count($a);$i++)
   {
       $ans_lcm = $ans_lcm*$a[$i]/gmp_gcd($a[$i],$ans_lcm);
     
   }
  for($j=1;$j<count($b);$j++)
  {
   $ans_gcd = gmp_gcd($b[$j],$ans_gcd);
   
  }
  while($multiple<=$ans_gcd)
  {
   $multiple = $multiple+$ans_lcm;
   if($ans_gcd%$multiple == 0)
   {
       $result++;
   }
  }
  return $result;

}
//can use it ..//
function gcd($a,$b)
{
   if($b == 0)
   {
       return $a;
   }
   else
   {
        return gcd($b,$a%$b);
   }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
