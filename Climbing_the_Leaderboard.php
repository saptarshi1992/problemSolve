<?php
//Climbing the Leaderboard//


/*An arcade game player wants to climb to the top of the leaderboard and track their ranking. The game uses Dense Ranking, so its leaderboard works like this:

The player with the highest score is ranked number 1 on the leaderboard.
Players who have equal scores receive the same ranking number, and the next player(s) receive the immediately following ranking number.
Function Description?:

Complete the climbingLeaderboard function in the editor below.

climbingLeaderboard has the following parameter(s):

int ranked[n]: the leaderboard scores
int player[m]: the player's scores
Returns

int[m]: the player's rank after each new score
*/
function climbingLeaderboard($ranked, $player) {

  $rank_arr = [];
  $rank_data =[];
  $count_rank = 1;
  $rank_arr[0] = 1;

  for ($i=1; $i<count($ranked) ;$i++) { 
    if($ranked[$i] == $ranked[$i-1])
    {
      $rank_arr[$i] = $rank_arr[$i-1];
    }
    else
    {
      $rank_arr[$i] = ++$count_rank;
    }
  }
  for ($i=0; $i <count($player) ; $i++) { 
    if($player[$i] > $ranked[0])
    {
      $rank_data[$i] = 1;
    }
    else if($player[$i]< $ranked[count($ranked)-1])
    {
      $rank_data[$i] = $rank_arr[count($rank_arr)-1] + 1;
    }
    else{
      $rank = binarySearch($ranked,$player[$i]);
      $rank_data[$i] = $rank_arr[$rank];
    }
  }
  return $rank_data;

}
function binarySearch($a,$key)
{
  $lo = 0;
  $hi = count($a)-1;

    while ($lo <= $hi) {
      $mid =$lo + ($hi - $lo) / 2;
      if ($a[$mid] == $key) {
        return $mid;
      } else if ($a[$mid] < $key && $key < $a[$mid - 1]) {
        return $mid;
      } else if ($a[$mid] > $key && $key >= $a[$mid + 1]) {
        return $mid + 1;
      } else if ($a[$mid] < $key) {
        $hi = $mid - 1;
      } else if ($a[$mid] > $key) {
        $lo = $mid + 1;
      }
    }
    return -1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ranked_count = intval(trim(fgets(STDIN)));

$ranked_temp = rtrim(fgets(STDIN));

$ranked = array_map('intval', preg_split('/ /', $ranked_temp, -1, PREG_SPLIT_NO_EMPTY));

$player_count = intval(trim(fgets(STDIN)));

$player_temp = rtrim(fgets(STDIN));

$player = array_map('intval', preg_split('/ /', $player_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = climbingLeaderboard($ranked, $player);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);



?>
