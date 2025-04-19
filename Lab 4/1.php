<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/'; // 'a', затем два любых символа (.), затем 'b'
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);
?>
