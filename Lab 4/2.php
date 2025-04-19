<?php
$str = 'a1b2c3';
$result = preg_replace_callback(
    '/\d+/', // поиск всех чисел
    function($matches) {
        return pow($matches[0], 3); // замена на куб числа
    },
    $str
);
echo $result; // a1b8c27
?>