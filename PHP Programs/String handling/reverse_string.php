<h1>Enter a string to print it in reverse order.</h1>

<form method="post">
	Enter a string : <input type="text" name="string">
	<input type="submit" name="submit">
</form>

<?php

	$input = $_POST["string"];
	echo "Reverse of input string is : ".strrev($input);
?>
