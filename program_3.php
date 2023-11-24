<!-- Write any 10 array functions with their examples that must contain their use cases. -->
<?php   

    $numbers = [1, 2, 3, 4, 5];
    $count = count($numbers); //count counts all elements in an array
    echo "Number of elements in the array: $count";

    $fruits = ['apple', 'banana'];
    array_push($fruits, 'orange', 'grape'); //Pushes one or more elements onto the end of an array
    echo "<br/>";
    print_r($fruits);

    $colors = ['red', 'green', 'blue'];
    $lastColor = array_pop($colors); //Pops the element off the end of an array
    echo "<br/>Popped color: $lastColor";

    $days = ['Monday', 'Tuesday', 'Wednesday'];
    $firstDay = array_shift($days); //Shifts an element off the beginning of an array
    echo "<br/>Shifted day: $firstDay";

    $months = ['March', 'April'];
    array_unshift($months, 'January', 'February'); //Prepends one or more elements to the beginning of an array
    echo "<br/>";
    print_r($months);

    $array1 = ['a', 'b'];
    $array2 = ['c', 'd'];
    $mergedArray = array_merge($array1, $array2); //Merges one or more arrays into a new array
    echo "<br/>";
    print_r($mergedArray);

    $numbers = [1, 2, 3, 4, 5];
    $reversedNumbers = array_reverse($numbers); // Reverses the order of elements in an array
    echo "<br/>";
    print_r($reversedNumbers);

    $fruits = ['apple', 'banana', 'orange'];
    $key = array_search('banana', $fruits); //Searches an array for a given value and returns the first corresponding key if successful
    echo "<br/>Key of 'banana': $key";

    $colors = ['red', 'green', 'blue', 'yellow', 'purple'];
    $subset = array_slice($colors, 1, 3); //Extracts a portion of an array
    echo "<br/>";
    print_r($subset);

    $numbers = [1, 2, 3, 2, 4, 5, 1];
    $uniqueNumbers = array_unique($numbers); // Removes duplicate values from an array
    echo "<br/>";
    print_r($uniqueNumbers);
    ?>