<?php

//4. Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.

function printFibonacci($n) {
    $first = 0;
    $second = 1;
    
    echo "First $n Fibonacci numbers:\n";
    
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            echo $first . " ";
        } elseif ($i == 1) {
            echo $second . " ";
        } else {
            $next = $first + $second;
            echo $next . " ";
            $first = $second;
            $second = $next;
        }
    }
}

printFibonacci(15);
?>
