<?php 

$min = 1;
$max = 100;
fwrite(STDOUT, "Your Name: ");
$nameOfUser = trim(fgets(STDIN));

	if(isset($argv[1])){
		$argv[1] =floatval($argv[1]);
		$min = floatval($argv[1]);
		if(is_numeric($argv[1]) === "false"){
			echo "Not a number min value set to 1\n";
			$min = 1;
		}
	}	
	if(isset($argv[2])){
		$argv[2] =floatval($argv[2]);
		$max = floatval($argv[2]);
		if(is_numeric($argv[2]) === "false"){
			echo "Not a number max value set to 100\n";
			$max = 100;
		}
	}	
function highlow($argv, $min, $max, $nameOfUser){


	$randomNumber = mt_rand($min,$max);  //random number between min and max
	echo $randomNumber. PHP_EOL;	


	fwrite(STDOUT, "What is your guess, $nameOfUser?\n"); //takes users guess
	$userGuess = trim(fgets(STDIN));
	$count = 1;
	$maxRounds = 3;

	do {										//runs this loop while user guess does not equal the number

		if ( $userGuess < $randomNumber){
			$count++;
			echo 'HIGHER' . PHP_EOL;
			fwrite(STDOUT, "What is your guess, $nameOfUser?\n");
			$userGuess = trim(fgets(STDIN));

		} elseif ( $userGuess > $randomNumber){
			$count++;
			echo 'LOWER' . PHP_EOL;
			fwrite(STDOUT, "What is your guess, $nameOfUser?\n");
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
			fwrite(STDOUT, "Input a range\nFirst Number: "); //input first number
			$min = floatval(fgets(STDIN));
			fwrite(STDOUT, "Second Number: "); //input second number
			$max = floatval(fgets(STDIN));

			highlow($argv, $min, $max, $nameOfUser);

		}
}
highlow($argv, $min, $max, $nameOfUser);






