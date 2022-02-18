//Given the array of strings S[], you need to find the longest string S which is the prefix of ALL the strings in the array.

Longest common prefix (LCP) for a pair of strings S1 and S2 is the longest string S which is the prefix of both S1 and S2.

For Example: longest common prefix of “abcdefgh” and “abcefgh” is “ABC”.//
<?php

function longestCommonPrefix($strs) {
    if (count($strs) <= 0) {
        return '';
    }

    //Initializes the prefix to the first element value
    $prefix = $strs[0];
    $count = count($strs);
    for ($i = 0; $i < $count; $i++) {
        if ($prefix !== '' && strpos($strs[$i], $prefix) !== 0) {
            $prefix = substr($prefix, 0, -1);
            $i--;
        }
    }

    return $prefix;
}

Echo longestcommonprefix (['zhang a ','zhang ABC','zhang C ','zhang ha']);
?>
