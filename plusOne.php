<?php
//Given a non-negative number represented as an array of digits, add 1 to the number ( increment the number represented by the digits ).

 //The digits are stored such that the most significant digit is at the head of the list.//
function plusOne($a){
        //WRITE YOUR CODE HERE
    $i=0;
    while($a[$i] == 0 && count($a)>1)
    {
        array_shift($a);
    }
    for($i=count($a)-1;$i>=0;$i--)
    {
       $sum = $a[$i]+1;
       //echo $sum;
       if($sum == 10)
       {
        $a[$i] = 0;
        $carry = 1;
        if($i==0)
        {
            array_unshift($a,1);
        }

       }
       else
       {
        $a[$i] = $sum;
        break;
       } 

    }
    return $a;

    }
    //$a = [1,2,3,4];
    $a = [9,9,9,9];
    //$a = [ 0, 3, 7, 6, 4, 0, 5, 5, 5 ];
    //$a = [0];
    //$a = [ 0, 0, 4, 4, 6, 0, 9, 6, 5, 1 ];
    $data = plusOne($a);
    print_r($data);

?>
