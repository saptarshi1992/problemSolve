<?php
function trap($a)
{
    $maxL = [];
    $maxR = [];
    //$maxLdata = $a[0];
  for($i=0;$i<count($a);$i++)
  {
    if($i == 0){
        $maxL[$i] = 0;
        $maxLdata = 0;
    }
    else
    {
        if($a[$i-1]>$maxLdata)
        {
            $maxLdata = $a[$i-1];
            $maxL[$i] = $maxLdata;
        }
        else
        {
            $maxL[$i] = $maxLdata;
        }
    }


  }
  for($i=count($a)-1;$i<=0;$i--)
  {
    
    if($i == count($a)-1)
    {
        $maxRdata = 0;
        $maxR[$j] = 0;
    }
    else
    {
        if($maxRdata<$a[$i+1])
        {
            $maxRdata = $a[$i+1];
            $maxR[$j] = $maxRdata;
        }
        else
        {
            $maxR[$j] = $maxRdata;
        }
    }


  }
  print_r($maxR);
  
}
//$A = [0, 1, 0, 2];
$A = [4,2,0,3,2,5];
trap($A);
