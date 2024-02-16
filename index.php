<?php

/**
 * Напишите функцию (на PHP или JS) нахождения 2-ого по встречаемости (частотности) символа в строке.
 * Например, в строке 'abccdccefffgihhhhhj' второй по встречаемости символ 'c'.
 * Алгоритмическая сложность не должна превысить линейную.
 */

function second_simvol($str)
{
    $max = 0;
    $second_max = 0;
    foreach (count_chars($str, 1) as $i => $val) {
        $n_arr[chr($i)] = $val;
        if ($val > $max) {
            $second_max = $max;
            $max = $val;
        }
    }

    asort($n_arr, SORT_NUMERIC);
    print_r($n_arr);

    return "Второй по встречаемости символ = '" . array_search($second_max, $n_arr) . "'";
}

$str = "abccdccefffgihhhhhj";
echo second_simvol($str);
