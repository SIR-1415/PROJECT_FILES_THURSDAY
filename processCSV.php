<?php

if (! isset($_GET['path'])) {
	header('location:uploadform.php');
}

$path = trim($_GET['path']);

//reads the each line into an array element
$lines = file($path);

echo "<table border='1'>";
foreach($lines as $line) {
	echo "<tr>";
	// getr each delimited item into an array element
	$items = explode(";",$line);
	foreach($items as $item) {
		echo "<td>";
		echo $item;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>