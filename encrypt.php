<?php
$str = '';
function encryption($text)
{
    $rev = '';
    $coding = '';
    $text_len = 0;
    while (isset($text[$text_len])) {
        $text_len++;
    }
    $i = $text_len - 1;
    $rev_len = 0;
    while ($i >= 0) {
        $rev .= $text[$i];
        $rev_len++;
        $i--;
    }
    $j = 0;
    while ($j < $rev_len) {
        $add = ord($rev[$j]);
        $coding .= chr($add + 22);
        $j++;
    }
    return  $coding;
}
echo encryption($str);
