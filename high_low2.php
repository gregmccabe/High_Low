<?php

$number = mt_rand(1, 100);
$number_of_guesses = 0;

fwrite(STDOUT, "Guess a number between 1 and 100?\n");

do {
 	$Guess = fgets(STDIN);
 	if ($Guess < $number) {
 		echo "higher\n";
 	
 	} elseif ($Guess > $number) {
 		echo "lower\n";

 	} else {
 		echo "Correct! It took you $number_of_guesses guesses!!\n";
 	}
 	$number_of_guesses += 1;	
	
	} while($Guess != $number);

?>



