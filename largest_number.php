<?php 

$number1 = 4; 
$number2 = 5; 
$number3 = 6; 


// Using the if else function to find the largest number 

if ($number1 > $number2 && $number1 > $number3) { 
	echo "The largest given number is: $number1\n"; 
} elseif ($number2 > $number1 && $number2 > $number3) { 
	echo "The largest given number is: $number2\n"; 
} else { 
	echo "The largest given number is: $number3\n"; 
} 

?>
