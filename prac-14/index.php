<?php

function primeCheck($number){
    if ($number == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 

$number = 8;

$flag = primeCheck($number);
if ($flag == 1)
    echo  $number." is Prime Number";
else
    echo $number." is Not Prime Number";
?>