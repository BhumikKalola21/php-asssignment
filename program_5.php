<!-- Write a program to get all the leap years after 1970 -->
<?php

$startYear = 1970;
$endYear = 2023;

echo "Leap years from $startYear to $endYear:\n";

for ($year = $startYear; $year <= $endYear; $year++) {
    // Check if the year is a leap year
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        echo $year . "\n";
    }
}

?>
