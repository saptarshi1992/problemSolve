<?php
//A teacher asks the class to open their books to a page number. A student can either start turning pages from the front of the book or from the back of the book. 
//They always turn pages one at a time. When they open the book, page  is always on the right side:
//When they flip page , they see pages  and . Each page except the last page will always be printed on both sides. 
//The last page may only be printed on the front, given the length of the book. If the book is  pages long, and a student wants to turn to page , what is the minimum number of pages to turn? They can start at the beginning or the end of the book.
//Given  and , find and print the minimum number of pages that must be turned in order to arrive at page .


/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */
//

function pageCount($n, $p) {
    // Write your code here
    if($n==0 && $n==$p && $p==1)
   {
       return 0;
   }
   else
   {
       $front = floor((int)(1+($p-2)/2));
       if($front<1)
           {
            $back = 0;
           }
       if($n%2 ==0)
       {
           $back = floor((int)(1 + ($n-$p-1)/2));
           if($back<1)
           {
            $back = 0;
           }
       }
       else
       {
           $back  = floor((int)($n-$p)/2);
           if($back<1)
           {
            $back = 0;
           }
       }
   }
  return(min($front,$back));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);
