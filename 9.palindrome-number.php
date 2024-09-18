<?php
/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x_array = str_split($x);
        for ($i = 0; $i < count($x_array)/2; $i++) {
            if ($x_array[$i] != $x_array[count($x_array) - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}
// @lc code=end
?>
