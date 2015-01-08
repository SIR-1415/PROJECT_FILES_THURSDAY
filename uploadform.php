<html>
	<head>
		
	</head>
	<body>
		<form method="post" action="upload.php" enctype="multipart/form-data">
			<input type="file" name="upfile"/>
			<input type="hidden" name="MAX_FILE_SIZE" value="100">
			<input type="submit">
			<input type="reset">
		</form>
<?php
	$dir = dir("./uploads");
	echo "<ul>";
	while($file = $dir->read()) {
		if (!is_dir($file)) 
			echo "<li><a href='processCSV.php?path=./uploads/$file'>".$file."</li>";
	}
	echo "</ul>";
?>		

	</body>
</html>
