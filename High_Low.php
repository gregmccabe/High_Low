<?php

$number = rand(1, 100);

fwrite(STDOUT, "Guess a number between 1 and 100?\n ");

while ($number != $Guess){
	$Guess = fgets(STDIN);
	if ($Guess > $number) {
		echo "Lower\n";	
	} elseif ($Guess < $number) {
		echo "Higher\n";
	} else {
		echo "Correct!\n";
	}
}
		
?>