<?php
/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $array = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $s_array = str_split($s);
        $int_array = [];
        for ($i = count($s_array) - 1; $i >= 0; $i--) {
            $roman = $s_array[$i];
            // ローマ数字を整数に変換
            $int = $array[$roman];
            // $intが5の倍数かつその先の数字が$intより小さい時、
            // 差を取得し、4または9の値を取得する
            if ($i != 0) {
                if ($int % 5 == 0 && $int > $array[$s_array[$i - 1]]) {
                    $int = $int - $array[$s_array[$i - 1]];
                    $i = $i - 1;
                }
            }
            $int_array[] = $int;
        }
        return array_sum($int_array);
    }
}
// @lc code=end
?>