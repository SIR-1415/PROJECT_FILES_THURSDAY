<?php
//check if the file variable is being sent
if (! isset($_FILES['upfile'])) {
	header('location:uploadform.php');
	exit;
}

/*
echo "file sent"."<br />";
echo "name" . $_FILES['upfile']['name'] ."<br />";
echo "temporary name" . $_FILES['upfile']['tmp_name']."<br />";
echo "size" . $_FILES['upfile']['size']."<br />";
echo "type" . $_FILES['upfile']['type']."<br />";
echo "error" . $_FILES['upfile']['error']."<br />";
*/

if ( $_FILES['upfile']['error']) {
	//echo $_FILES['upfile']['error'];
	header('location:uploadform.php');
}

$destination_path = "./uploads/".$_FILES['upfile']['name'];


// move the file
//is_isloaded_file();

move_uploaded_file($_FILES['upfile']['tmp_name'], $destination_path);
header('location:uploadform.php');

?>