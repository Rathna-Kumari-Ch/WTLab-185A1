<?php

$array1 = array(1,14,7,19,3,2);
$array2 = array(10,32,22,12,16);
echo "Array 1 : ";
for($i = 0;$i < count($array1);$i++){
	echo $array1[$i]." ";
}
echo "<br>";
echo "Array 2 : ";
for($i = 0;$i < count($array2);$i++){
	echo $array2[$i]." ";
}
echo "<br>";
echo "<br>";
$array3 = array_merge($array1,$array2);
sort($array3);

$arrlen = count($array3);

echo "Sorted Merged list : ";
for($i = $arrlen-1;$i >= 0;$i--){
	echo $array3[$i]." ";
}

?>
