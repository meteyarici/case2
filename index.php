<?php

$str = "Cüzdan olarak seni aramızda görmek istiyoruz!";

echo $str;

/**
 * @param $string
 * @return array
 */
function char_count($string)
{
    $len = mb_strlen($string, 'UTF-8');
    $r1 = [];
    for ($i = 0; $i < $len; $i++) {
        $r1[] = mb_substr($string, $i, 1, 'UTF-8');
    }
    $r2 = array_count_values($r1);
    arsort($r2);
    unset($r2[" "]);
    return $r2;
}

echo "<pre>";
print_r(char_count($str));



