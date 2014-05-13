<?php

if ($argc == 3);{
	$number = mt_rand($argv[1], $argv[2]);
	$number_of_guesses = 0;
}

do {
 	$Guess = fgets(STDIN);

 	$number_of_guesses += 1;	
 	
 	if ($Guess < $number) {
 		echo "higher\n";
 	
 	} elseif ($Guess > $number) {
 		echo "lower\n";

 	} else {
 		echo "Correct! It took you $number_of_guesses guesses!!\n";
 	}
	
	} while($Guess != $number);

?>