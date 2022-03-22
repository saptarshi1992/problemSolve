<?php
//Find the contiguous non-empty subarray within an array, A of length N, with the largest sum.
//using updated kedans algo//
function maxsumsubarray($a)
{
    $maxe = 0;
    $maxf = PHP_INT_MIN;
    for($i=0;$i<count($a);$i++)
    {
        $maxe = $maxe + $a[$i];
        if($maxe<$a[$i])
        {
            $maxe = $a[$i];
        }
        if($maxf < $maxe)
        {
            $maxf = $maxe;
        }
    }
    print_r($maxf);
}
$a = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
maxsumsubarray($a);

?>
