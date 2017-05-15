<?php
$month = array ('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December');


$numberofmonths = count($month);
echo "<div style='text-align:center'><h1>Print array using a for loop</h1></div>";
echo "<br>";
for ($i = 0; $i < $numberofmonths; $i++) {
	echo "<div style='text-align:center'>";
  	print "$month[$i] ";
  	echo "<br>";
  	echo "</div>";
}


$numberofmonths = count($month);
echo "<br>";

echo "<div style='text-align:center'><h1>Print array using a FOREACH loop</h1></div>";
echo "<br>";
	foreach($month as $value) {
		echo "<div style='text-align:center'>";
		print "$value ";
		echo "<br>";
		echo "</div>";
	}

echo "<br>";
echo "<div style='text-align:center'><h1>Print array in alphabetical order using a for loop</h1></div>";
echo "<br>";
echo "<br>";
sort($month);
for ($i = 0; $i < $numberofmonths; $i++) {
	echo "<div style='text-align:center'>";
	print "$month[$i] "  ;
	echo "<br>";
	echo "</div>";
}

echo "<br>";
echo "<div style='text-align:center'><h1>Print array in alphabetical order using a FOREACH loop</h1></div>";
echo "<br>";
sort($month);
foreach($month as $value) {
	echo "<div style='text-align:center'>";
	print "$value ";
	echo "<br>";
	echo "</div>";
}

?>