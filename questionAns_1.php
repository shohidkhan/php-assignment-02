<?php


// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The functionshould take the arguments like start as 1, end as 20 and step as 2. You must call the function to print.Also do the same using while loop and do-while loop also.




function printEvenNumbersFor($start,$end,$stepping) {
    
    for($i=$start; $i<=$end;$i+=$stepping){
        echo $i." ";
    }

    echo PHP_EOL;

}


//find even using while loop

function  printEvenNumbersWhile($start,$end,$stepping) {

    $i=$start;
    while($i<=$end){
        echo $i." ";
        $i+=$stepping;
    }
    echo PHP_EOL;

}

function printEvenNumbersDoWhile($start,$end,$stepping)  {
     $i=$start;
     do{
        echo $i." " ;
        $i+=$stepping;
     }while($i<=$end);
     echo PHP_EOL;
}
printEvenNumbersFor(2,20,2);
printEvenNumbersWhile(2,20,2);
printEvenNumbersDoWhile(2,20,2);







