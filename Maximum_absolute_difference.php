<?php 
//Maximum Absolute Difference://
// time complexity is O(N2)//
function Maximum_absolute_difference($a)
  {
    $max_diff = PHP_INT_MIN;
    for($i = 0;$i<count($a);$i++)
    {
        for($j=0;$j<count($a); $j++)
        {
            $max_diff_calculate= calculate_max_diff($a,$i,$j);
            if($max_diff_calculate>$max_diff)
            {
                $max_diff = $max_diff_calculate;
            }


        }
    }
    return $max_diff;
}
  function calculate_max_diff($a,$i,$j)
  {
    $cal_diff_data = abs($a[$i]-$a[$j]) + abs($i-$j);
    return $cal_diff_data;
  }

// time complexity is O(N)//
//ALGO:
/*1. Calculate the value of A[i] + i and A[i] – i for every element of the array while traversing through the array.
  2. Then for the two equivalent cases, we find the maximum possible value. For that, we have to store minimum and maximum values of expressions A[i] + i and A[i] – i for all i.
  3. Hence the required maximum absolute difference is maximum of two values i.e. max((A[i] + i) – (A[j] + j)) and max((A[i] – i) – (A[j] – j)). These values can be found easily in linear time. 
     a. For max((A[i] + i) – (A[j] + j)) Maintain two variables max1 and min1 which will store maximum and minimum values of A[i] + i respectively. max((A[i] + i) – (A[j] + j)) = max1 – min1 
     b. For max((A[i] – i) – (A[j] – j)). Maintain two variables max2 and min2 which will store maximum and minimum values of A[i] – i respectively. max((A[i] – i) – (A[j] – j)) = max2 – min2*/

  function Maximum_absolute_difference($a)
  {
    $max1 = PHP_INT_MIN;
    $min1 = PHP_INT_MAX;
    $max2 = PHP_INT_MIN;
    $min2 = PHP_INT_MAX;
    for($i=0;$i<count($a);$i++)
    {
        $max1 = max($max1,$a[$i]+$i);
        $min1 = min($min1,$a[$i]+$i);
        $max2 = max($max2,$a[$i]-$i);
        $min2 = min($min2,$a[$i]-$i);
    }
    return max(($max1-$min1),($max2-$min2));
  }
  
 $a  =  [1,3,-1];
 $diff = Maximum_absolute_difference($a);
 print_r($diff);
