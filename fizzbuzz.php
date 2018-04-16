<?php

// Open the input stream for reading the Users input
$stdin = fopen('php://stdin', 'r');

// Print a welcome message to the User
fwrite(STDOUT, "Welcome to our FizzBuzz App". "\n");

// Prompt the User for their start number and validate their input
fwrite(STDOUT, "Please enter a start number : ");
    fscanf($stdin,'%d',$start);
     
while(!is_int($start)) {
    fwrite(STDOUT, "Sorry your start number must be a valid integer : ");
    fscanf($stdin,'%d\n',$start);  
}

// Prompt the User for their end number and validate their input
fwrite(STDOUT, "Please enter an end number: ");    
    fscanf($stdin,'%d\n',$end); 

    while(!is_int($end)) {
         fwrite(STDOUT, "Sorry your start number must be a valid integer : ");
         fscanf($stdin,'%d\n',$end);        
    }


/* Loop through each number between start and end as provided by the User - 
   if the number is not divisible by 3 & 5, print the number and continue to the next number in the range */
foreach(range($start, $end) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
        fwrite(STDOUT, $number . "\n");       
        continue;
    }

    // if the number is divisible by 3, print Fizz
    if ($number % 3 == 0) fwrite(STDOUT,'Fizz');
    
    // if the number is divisble by 5, print Buzz
    if ($number % 5 == 0) fwrite(STDOUT, 'Buzz');
    
    echo "\n";   
}



?>