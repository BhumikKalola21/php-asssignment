<!-- Write a program to define the variables and differentiate the variable's scopes in the program. -->

<?php
    $num1 = 10;
    echo "I am the value of global variable" ." ".$num1  ;

    function program1(){
        global $num1;  // global variable access from the function using global key word
        $num2 = 11;
        STATIC $count = 0;
        $count++;
        

        echo "<br/> I am the value of local variable" ." ".$num2 ;
        echo "<br/> I am the value of global variable which is accessing from the function" ." ".$num1 ;
        echo "<br/> I am value of count using static keyword ";
        echo $count;
    }
    program1();
    echo "<br/>I am the value of local variable which is declared inside the function" ." ".$num2; // this not return any value because we are trying to access value of the local variable of function so the scope of this variable is not accessible outside the function 
?>