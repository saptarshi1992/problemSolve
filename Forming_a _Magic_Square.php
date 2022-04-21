<?php
//We define a magic square to be an  matrix of distinct positive integers from  to  where the sum of any row, column, or diagonal of length  is always equal to the same number: the magic constant.

//You will be given a  matrix  of integers in the inclusive range . We can convert any digit  to any other digit  in the range  at cost of . Given , convert it into a magic square at minimal cost. Print this cost on a new line.

//Note: The resulting magic square must contain distinct integers in the inclusive range 
/*
 * Complete the 'formingMagicSquare' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY s as parameter.
 */

function formingMagicSquare($s) {
    // Write your code here
    $magicSquareCombinations = [
      [[ 4, 9, 2 ], [ 3, 5, 7 ], [ 8, 1, 6 ] ],
      [[ 8, 3, 4 ], [ 1, 5, 9 ], [ 6, 7, 2 ] ],
      [[ 6, 1, 8 ], [ 7, 5, 3 ], [ 2, 9, 4 ] ],
      [[ 2, 7, 6 ], [ 9, 5, 1 ], [ 4, 3, 8 ] ],
      [[ 2, 9, 4 ], [ 7, 5, 3 ], [ 6, 1, 8 ] ],
      [[8, 1, 6 ], [3, 5, 7 ], [ 4, 9, 2 ] ],
      [ [ 6, 7, 2 ], [ 1, 5, 9 ], [ 8, 3, 4 ] ],
      [ [ 4, 3, 8 ], [ 9, 5, 1 ], [ 2, 7, 6 ] ],
    ];
    $min_cost = PHP_INT_MAX;
    for($i=0;$i<count($magicSquareCombinations);$i++)
    {
        $mod_cost = 0;
        for($j=0;$j<count($s);$j++)
        {
            for($k=0;$k<count($s);$k++)
            {
                $mod_cost+=abs($s[$j][$k] - $magicSquareCombinations[$i][$j][$k]);
            }
        }
         $min_cost = min($min_cost,$mod_cost);
    }
    return $min_cost;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = array();

for ($i = 0; $i < 3; $i++) {
    $s_temp = rtrim(fgets(STDIN));

    $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = formingMagicSquare($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
