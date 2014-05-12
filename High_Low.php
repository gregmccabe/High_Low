
<?php

if ($argc == 3) {
	$number = mt_rand($argv[1], $argv[2]);
	fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}\n ");
} else {
	

	fwrite(STDOUT, "Enter a low value\n ");	
	$low = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter a high value\n");	
	$high = trim(fgets(STDIN));

	$number = mt_rand($low, $high);
	
	fwrite(STDOUT, "Guess a number between $low and $high\n ");
}

$number_of_guess = 0;


do {	
$Guess = fgets(STDIN);
	if ($Guess > $number) {
		echo "Lower\n";	
	} elseif ($Guess < $number) {
		echo "Higher\n";
	}
	$number_of_guess += 1;
} while($number != $Guess);

echo "Correct! It took you $number_of_guess guesses!!\n";
		
?>