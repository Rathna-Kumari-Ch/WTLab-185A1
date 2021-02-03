<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$myfile = fopen("newfile.txt","r") or die("Unable to open file");
$txt = fread($myfile, filesize("newfile.txt"));
fclose($myfile);

$myfile = fopen("newfile2.txt","w") or die("Unable to open file!");
fwrite($myfile, $txt);
echo "successfully read from newfile and written into newfile2 !!";
fclose($myfile);
?>

</body>
</html>
