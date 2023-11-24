<!-- Write a program to find the second highest number in a given array without using any predefined function -->
<?php

function secondHighest($list) {
    $max = -INF;
    $secondMax = -INF;

    foreach($list as $num) {
        if($num > $max) {
        $secondMax = $max;
        $max = $num;
        }
        else if($num > $secondMax) {
        $secondMax = $num;
        }
    }

    return $secondMax !== -INF && $secondMax !== $max ? $secondMax : 0;
}

$arr = [20,846,1,32,3554];

echo "My second Highest number is : " . secondHighest($arr);

?>