//Rain Water Trapped//
//Problem Description//
//Given a vector A of non-negative integers representing an elevation map where the width of each bar is 1, compute how much water it is able to trap after raining.//
<?php

function trap($a)
{
    
     $water = 0;
 
    // Fill left array
    $left[0] = $a[0];
    for ($i = 1; $i < count($a); $i++)
    $left[$i] = max($left[$i - 1],
                        $a[$i]);
 
    // Fill right array
    $right[count($a)- 1] = $a[count($a) - 1];
    for ($i = count($a) - 2; $i >= 0; $i--)
    $right[$i] = max($right[$i + 1],
                           $a[$i]);
 
    // right[i]) - arr[i] .
    for ($i = 0; $i < count($a); $i++)
    $water += min($left[$i], $right[$i])
                             - $a[$i];
 
    return $water;
  
}
    // Driver program
    $a= array(0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1);
    
    echo trap($a);



 ?>

