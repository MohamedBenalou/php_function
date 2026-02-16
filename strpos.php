
<?php
function my_strpos($text, $need)
{
    $len_text = 0;
    while (isset($text[$len_text])) {
        $len_text++;
    }
    $len_need = 0;
    while (isset($needel[$len_need])) {
        $len_need++;
    }
    if ($need == 0) {
        return 0;
    }
    for ($i = 0; $i <= $len_text - $len_need; $i++) {
        $found = true;
        for ($j = 0; $j < $len_need; $j++) {
            if ($text[$i + $j] !== $need[$j]) {
                $found = false;
                break;
            }
        }
        if ($found) {
            return $i;
        }
    }
    return false;
}
