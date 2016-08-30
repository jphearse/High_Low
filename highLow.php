<?php 

$randomNumber = mt_rand(1,100);
echo $randomNumber. PHP_EOL;

fwrite(STDOUT, "What is your guess?\n");
$userGuess = trim(fgets(STDIN));
$count = 1;

do {

	if ( $userGuess < $randomNumber){

		echo 'HIGHER' . PHP_EOL;
		fwrite(STDOUT, "What is your guess?\n");
		$userGuess = trim(fgets(STDIN));

	} elseif ( $userGuess > $randomNumber){
		
		echo 'LOWER' . PHP_EOL;
		fwrite(STDOUT, "What is your guess?\n");
		$userGuess = trim(fgets(STDIN));

	}
	$count++;
} while( $userGuess != $randomNumber);
echo "GOOD GUESS!" . PHP_EOL;
echo "Rounds $count" . PHP_EOL;