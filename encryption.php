<?php
$str = '';
function str_len($text)
{
   
    $text_len = 0;
    while (isset($text[$text_len])) {
        $text_len++;
    }
   
    return  $text_len;
}
echo str_len($str);
