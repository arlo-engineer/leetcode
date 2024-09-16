<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($i=0; $i<count($nums); $i++) {
            $f_num = $nums[$i];
            $s_num = $target - $f_num;
            $s_array = array_slice($nums, $i+1);
            echo $s_array;
            if (!in_array($s_num, $s_array)) {
                continue;
            }
            $j = array_search($s_num, $s_array) + $i + 1;
            return [$i, $j];
        }
    }
}
// @lc code=end
?>

