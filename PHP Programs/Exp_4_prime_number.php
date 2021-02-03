

<form method="post">
	Enter a Number: <input type="text" name="input"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php

if($_POST){
	$input=$_POST['input'];
}

	$number = 1;
	while ($number < $input) {
		$count = 0;
		for($i = 1;$i <= $number;$i++){
			if(($number % $i) == 0){
				$count++;
			}
		}

		if($count < 3){
			echo $number.",";
		}
		$number = $number + 1;
	}
?>
