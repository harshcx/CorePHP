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

// for ($i = 0; $i < $lenght;) {

//     //print 5 data
//     for ($j = 0; $j < 5; $j++) {
//         if ($i + 1 > $lenght) {
//             break;
//         }
//         echo $datas[$i++];
//     }
//     echo '<br>';

//     //print 3 data
//     for ($k = 0; $k < 6; $k++) {
//         if ($i + 1 > $lenght) {
//             break;
//         }
//         if ($k == 0) {
//             echo '[' . $datas[$i++] . ']';
//         }
//         if ($k > 0 && $k < 3) {
//             echo $datas[$i++];
//             if ($k == 2) {
//                 echo '<br>';
//             }
//         }
//         if ($k == 5) {
//             echo '[' . $datas[$i++] . ']';
//             echo '<br>';
//         }
//         if ($k > 2 && $k < 5) {
//             echo $datas[$i++];
//         }
//     }
// }
