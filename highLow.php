<?php 
function highlow(){
	fwrite(STDOUT, "Input a range\nFirst Number:"); //input first number
	$min = floatval(fgets(STDIN));
	fwrite(STDOUT, "Second Number:"); //input second number
	$max = floatval(fgets(STDIN));

	$randomNumber = mt_rand($min,$max);  //random number between min and max
	echo $randomNumber. PHP_EOL;

	fwrite(STDOUT, "What is your guess?\n"); //takes users guess
	$userGuess = trim(fgets(STDIN));
	$count = 1;
	$maxRounds = 3;

do {										//runs this loop while user guess does not equal the number

	if ( $userGuess < $randomNumber){
		$count++;
		echo 'HIGHER' . PHP_EOL;
		fwrite(STDOUT, "What is your guess?\n");
		$userGuess = trim(fgets(STDIN));

	} elseif ( $userGuess > $randomNumber){
		$count++;
		echo 'LOWER' . PHP_EOL;
		fwrite(STDOUT, "What is your guess?\n");
		$userGuess = trim(fgets(STDIN));

	}
	
} while( $userGuess != $randomNumber);

if($userGuess == $randomNumber){			//user gets number right
	echo "GOOD GUESS!" . PHP_EOL; 
} 

echo "Rounds $count" . PHP_EOL;			//outputs numebrs of rounds played

fwrite(STDOUT, "Would you like to play again? (yes/no) ");		//play again?
	$playAgain = trim(fgets(STDIN));
	if($playAgain == "yes"){
		highlow();
	}
}
highlow();






