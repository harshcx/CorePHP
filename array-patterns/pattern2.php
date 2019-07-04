<?php
$datas = array(
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => 'd',
    5 => 'e',
    6 => 'f',
    7 => 'g',
    8 => 'h',
    9 => 'i',
    10 => 'j',
    11 => 'k',
    12 => 'l',
    13 => 'm',
    14 => 'n',
    15 => 'o',
    16 => 'p',
);
$lenght = count($datas);


foreach ($datas as $key => $value) {
    if ($key < 6)
        echo " $key ";
    if ($key == 5)
        echo '<br>';

    if ($key > 5 && $key < 9) {
        if ($key == 6)
            echo "[ $key ]";
        else
            echo "$key";
    }
    if ($key == 9)
        echo '<br>';
    if ($key > 8 && $key < 12) {
        if ($key == 11)
            echo '[' . $key . ']';
        else
            echo "$key";
    }
    if ($key == 11)
        echo '<br>';

    if ($key > 11)
        echo "$key";
}
