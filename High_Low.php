<?php

$number = rand(1, 100);

$number_of_guess = 0;

fwrite(STDOUT, "Guess a number between 1 and 100?\n ");

while ($number != $Guess){
	$Guess = fgets(STDIN);

	if ($Guess > $number) {
		echo "Lower\n";	
	} elseif ($Guess < $number) {
		echo "Higher\n";
	}
	$number_of_guess += 1;
}

echo "Correct! It took you $number_of_guess guesses!!\n";
		
?>