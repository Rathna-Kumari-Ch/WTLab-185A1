
<h1>Enter the string and word to search for given word in the string.</h1>


<form method="post" >
	String : <input type="text" name="string">
	
	<br>
	<br>
	Word :<input type="text" name="word">
<br><br>
	<input type="submit" name="submit">
</form>
<?php

	$string = $_POST["string"];
	$word = $_POST["word"];
	if(strpos($string, $word) !== false){
		echo "word Found!!";
	}
	else{
		echo "Word not Found!!";
	}
?>