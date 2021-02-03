<h1>Enter the String to count the number of words present in the input string.</h1>

<form method="post" >
	Enter a string : <input type="text" name="string">
	<input type="submit" name="submit">
</form>

<?php

	$input = $_POST["string"];
	
	echo "No of words in a input string is : ".str_word_count($input);
?>