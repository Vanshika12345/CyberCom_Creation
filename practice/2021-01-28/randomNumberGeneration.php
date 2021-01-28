<?php

	if (isset($_POST['roll'])) {
		
		$rand = rand(1,6);
		echo 'You rolled '.$rand;
		//checks if number is 6
		if ($rand === 6) {
			echo '<br>Congrats! You got 6';
		}else{
			echo "<br>Try again ";
		}
	}


?>

<form action="randomNumberGeneration.php" method="post">
	<input type="submit" name="roll" value="Roll Dice">
	
</form>