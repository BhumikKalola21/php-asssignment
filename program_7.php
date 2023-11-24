<!-- Write any 10 reserved keywords and explain them using some programs, also use the keywords in the same php file -->
<?php
// 1. echo
echo "<br/>1. Hello, World!\n";

// 2. if and 3. else
$x = 10;
if ($x > 5) {
    echo "<br/>2. x is greater than 5\n";
} else {
    echo "<br/>3. x is not greater than 5\n";
}

// 4. for
echo "<br/>4. ";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}

// 5. foreach
echo "<br/>5. ";
$colors = ['red', 'green', 'blue'];
foreach ($colors as $color) {
    echo "$color ";
}

// 6. while
echo "<br/>6. ";
$i = 1;
while ($i <= 5) {
    echo "$i ";
    $i++;
}

// 7. function
echo "<br/>7. ";
function greet($name) {
    echo "Hello, $name!\n";
}
greet("John");

// 8. class
echo "<br/>8. ";
class Car {
    public $color;

    public function displayColor() {
        echo "The car is $this->color.\n";
    }
}
$myCar = new Car();
$myCar->color = "blue";
$myCar->displayColor();

// 9. return
echo "<br/>9. ";
function add($a, $b) {
    return $a + $b;
}
$result = add(5, 3);
echo "Sum: $result\n";

// 10. namespace
echo "<br/>10. ";
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "It's the start of the week!";
        break;
    case "Wednesday":
        echo "It's the middle of the week!";
        break;
    default:
        echo "It's just another day.";
}
